<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\{ Facades\App, Facades\Storage };
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class ImageService
{

    public function uploadAvatar($request, int $id): JsonResponse
    {
        if (! $request->hasFile('avatar')) {
            return response()->json(['message' => 'Image Not Found'], 404);
        }

        $post_image = $request->file('avatar');
        $filename = $post_image->getClientOriginalName();
        ImageOptimizer::optimize($post_image);

        if (App::environment('production')) {
            Storage::putFileAs('uploads/avatar/'.$id, $post_image, $filename, 'public');
        }

        if (App::environment(['local', 'staging'])) {
            Storage::putFileAs('staging/uploads/avatar/'.$id, $post_image, $filename, 'public');
        }
        User::where('id', $id)->update(['avatar' => $filename]);

        return response()->json(['message' => 'Upload Successful'], 404);
    }

    public function uploadPostDisplayImage($request): JsonResponse
    {
        if (! $request->hasFile('display_image')) {
            return response()->json(['image not found'], 404);
        }

        $post_image = $request->file('display_image');
        $filename = $post_image->getClientOriginalName();
        ImageOptimizer::optimize($post_image);

        if (App::environment('production')) {
            Storage::putFileAs('uploads/displayimage/'.$request->post_id, $post_image, $filename, 'public');
        }

        if (App::environment(['local', 'staging'])) {
            Storage::putFileAs('staging/uploads/displayimage/'.$request->post_id, $post_image, $filename, 'public');
        }
        $request->display_image = $filename;

        return response()->json(['image not found'], 404);
    }

    public function deletePostDisplayImage($id): JsonResponse
    {
        $post_id = Post::where('id', $id)->value('post_id');
        $display_image = Post::where('id', $id)->value('display_image');
        if (App::environment('production')) {
            Storage::putFileAs('uploads/displayimage/'.$post_id.'/'.$display_image, $display_image, 'public');

            return response()->json([
                'message' => 'image deleted successfully',
                'post_id' => $post_id,
                'display_image' => $display_image,
            ]);
        }
        if (App::environment(['local', 'staging'])) {
            Storage::putFileAs('staging/uploads/displayimage/'.$post_id.'/'.$display_image, $display_image, 'public');

            return response()->json([
                'message' => 'image deleted successfully',
                'post_id' => $post_id,
                'display_image' => $display_image,
            ]);
        }

        return response()->json(['image not found'], 404);
    }
}
