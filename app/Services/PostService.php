<?php
declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\PostResource;
use App\Models\Package;
use App\Models\Post;
use App\Models\Subscription;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostService
{
    public function checkSubscriptionStatus() : JsonResponse
    {
        $subscriptionStatus = Subscription::where('user_id', auth()->id())->value('status');

        if($subscriptionStatus == null) {
            return response()->json([
                'message' => 'No subscription found, subscribe before creating a post'
            ]);
        }

        if($subscriptionStatus == 0) {
            return response()->json([
                'Inactive subscription, renew subscription before creating a post'
            ]);
        }

        return response()->json(['Subscription Not Found'], 500);
    }

    public function checkActiveSlots(): JsonResponse
    {
        $subscriptionPackage = Subscription::where('user_id', auth()->id())->value('package_id');
        $subscriberTicketSlots = Package::where('id', $subscriptionPackage)->value('ticket_slots');
        $activePosts = Post::query()->where('user_id', auth()->id())->where('status', 1)->count();

        if ($activePosts == $subscriberTicketSlots) {
            return response()->json(['Maximum number of slots reached, Update your package to create more posts']);
        }

        return response()->json(['Package Not Found'], 500);
    }

    public function getPosts(): JsonResponse
    {
        return response()->json([
            'data' => PostResource::collection(Post::paginate(10))
        ], 204);
    }

    public function storePost($request): JsonResponse
    {
        $this->checkSubscriptionStatus();

        $this->checkSubscriptionStatus();

        $post = new Post();
        $post->user_id = auth('api')->id();
        $post->category_id = $request->category_id;
        $post->post_id = Str::uuid();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->location = $request->location;
        $post->date = $request->date;
        $post->status = $request->status;
        $post->likes = $request->likes;
        $post->shares = $request->shares;
        $post->feature_status = $request->feature_status;
        $post->trending_status = $request->trending_status;
        $post->category_trending_status = $request->category_trending_status;

        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $filename = $poster->getClientOriginalName();
            //ImageOptimizer::optimize($poster);
            if (App::environment('production')) {
                Storage::putFileAs('uploads/poster/'.$post->post_id, $poster, $filename, 'public');
            }
            if (App::environment(['local', 'staging'])) {
                Storage::putFileAs('uploads/poster/'.$post->post_id, $poster, $filename, 'public');
            }
            $post->poster = $filename;
        }

        $post->save();

        return response()->json([
            'message' => 'Post Created Successfully',
            'data' => PostResource::collection($post)
        ], 201);

    }

    public function showPost(Post $post): JsonResponse
    {
        return response()->json([
            'data' => PostResource::collection(Post::find($post))
        ]);
    }

    public function updatePost(Request $request, Post $post): JsonResponse
    {
        $this->checkSubscriptionStatus();

        $this->checkActiveSlots();

        $post = Post::find($post);
        $post->user_id = $request->user_id;
        $post->category_id = $request->category_id;
        $post->post_id = Post::where('id', $post)->value('post_id');
        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->description = $request->description;
        $post->location = $request->location;
        $post->date = $request->date;
        $post->status = $request->status;
        $post->likes = $request->likes;
        $post->shares = $request->shares;
        $post->feature_status = $request->feature_status;
        $post->trending_status = $request->trending_status;
        $post->category_trending_status = $request->category_trending_status;
        $post->save();

        return response()->json([
            'message' => 'Update Successful',
            'data' => PostResource::collection($post)
        ]);
    }

    public function deletePost(Post $post): JsonResponse
    {
        $post->delete();

        return response()->json([
            'message' => 'Post Deleted Successfully',
        ], 204);
    }

}
