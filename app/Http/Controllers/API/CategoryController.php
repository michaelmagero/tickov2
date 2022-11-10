<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{

    public function index(): JsonResponse
    {
        return (new CategoryService())->getCategories();
    }

    public function store(CategoryRequest $request): JsonResponse
    {
        return (new CategoryService())->storeCategory($request);
    }

    public function show(Category $category): JsonResponse
    {
        return (new CategoryService())->showCategory($category);
    }

    public function update(CategoryRequest $request, Category $category): JsonResponse
    {
        return (new CategoryService())->updateCategory($request, $category);
    }

    public function destroy(Category $category): JsonResponse
    {
        return (new CategoryService())->deleteCategory($category);
    }
}
