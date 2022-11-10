<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryService
{

    public function getCategories(): JsonResponse
    {
        return response()->json([
            'data' => CategoryResource::collection(Category::paginate(10))
        ], 204);
    }

    public function storeCategory($request): JsonResponse
    {
        $category = new Category();
        $category->category = $request->category;
        $category->description = $request->description;
        $category->save();

        return response()->json([
            'message' => 'Category Added Successfully',
            'data' => CategoryResource::collection($category)
        ], 201);
    }

    public function showCategory($category): JsonResponse
    {
        return response()->json([
            'data' => CategoryResource::collection(Category::find($category))
        ]);
    }

    public function updateCategory($request, $category): JsonResponse
    {
        $category = Category::find($category);
        $category->category = $request->category;
        $category->description = $request->description;
        $category->save();

        return response()->json([
            'message' => 'Update Successful',
            'data' => CategoryResource::collection($category)
        ]);
    }

    public function deleteCategory($category): JsonResponse
    {
        $category->delete();

        return response()->json([
            'message' => 'Category Deleted Successfully',
        ], 204);
    }
}
