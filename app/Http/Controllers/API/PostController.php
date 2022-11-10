<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        return (new PostService())->getPosts();
    }

    public function store(PostRequest $request): JsonResponse
    {
        return (new PostService())->storePost($request);
    }

    public function show(Post $post): JsonResponse
    {
        return (new PostService())->showPost($post);
    }

    public function update(PostRequest $request, Post $post): JsonResponse
    {
        return (new PostService())->updatePost($request, $post);
    }

    public function destroy(Post $post): JsonResponse
    {
        return (new PostService())->deletePost($post);
    }
}
