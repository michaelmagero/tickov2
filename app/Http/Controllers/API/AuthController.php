<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\EmailService;
use App\Services\HelperService;
use App\Services\MessageService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class AuthController extends Controller
{

    public function store(Request $request): JsonResponse
    {
        try {
            $validateUser = Validator::make($request->all(),
                [
                    'email' => 'required|email|unique:users,email',
                    'phone' => 'required|numeric|unique:users,phone',
                ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'message' => 'validation error',
                    'errors' => $validateUser->errors(),
                ], 401);
            }

            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone' => (new HelperService())->formatPhoneNumber($request->phone),
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
                'status' => $request->status,
                'terms_and_conditions' => $request->terms_and_conditions,
            ]);

//            (new MessageService())->successfulUserRegistrationMessage($user->id);
//            (new EmailService())->newUserEmail($request->email);

            return response()->json([
                'message' => 'User Created Successfully',
                'data' => UserResource::collection(User::where('id', $user->id)->get()),
            ], 201);
        } catch (Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function login(Request $request): JsonResponse
    {
        try {
            $validateUser = Validator::make($request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]);

            if ($validateUser->fails()){

                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);

            }

            if(User::where('email', $request->email)->doesntExist())
            {
                return response()->json(['message' => 'user does not exist, register and try again'], 403);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'message' => 'User Logged In Successfully',
                'token_type' => 'Bearer',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ]);

        } catch (Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function logout(): JsonResponse
    {
        Auth::logout();
        auth()->user()->currentAccessToken()->delete();
        return response()->json(['Logout Successful']);
    }
}
