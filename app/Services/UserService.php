<?php
declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;

class UserService
{

    public function getUsers(): JsonResponse
    {
        return response()->json([
            'data' => UserResource::collection(User::paginate(10))
        ]);
    }

    public function storeUser($request): JsonResponse
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone = $request->phone;
            $user->company = $request->company;
            $user->role = $request->role;
            $user->save();

            return response()->json([
                'message' => 'User registered Successfully',
                'data' => UserResource::collection($user)
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }

    }

    public function showUser($user): JsonResponse
    {
        return response()->json([
            'data' => UserResource::collection($user)
        ]);
    }

    public function updateUser($request, $user): JsonResponse
    {
        try {
            $user = User::find($user);
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone = $request->phone;
            $user->company = $request->company;
            $user->role = $request->role;
            $user->save();

            return response()->json([
                'message' => 'Update Successful',
                'data' => UserResource::collection($user)
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function deleteUser($user): JsonResponse
    {
        $user->delete();
        return response()->json([
            'message' => 'User Deleted Successfully'
        ], 204);
    }

}
