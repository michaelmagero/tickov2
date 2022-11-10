<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    public function index(): JsonResponse
    {
        return (new UserService())->getUsers();
    }

    public function store(UserRequest $request): JsonResponse
    {
        return (new UserService())->storeUser($request);
    }

    public function show(User $user): JsonResponse
    {
        return (new UserService())->showUser($user);
    }

    public function update(UserRequest $request, User $user): JsonResponse
    {
        return (new UserService())->updateUser($request, $user);
    }

    public function destroy(User $user): JsonResponse
    {
        return (new UserService())->deleteUser($user);
    }
}
