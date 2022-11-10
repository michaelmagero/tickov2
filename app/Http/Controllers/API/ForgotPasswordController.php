<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\EmailService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{

    public function forgotPassword(Request $request): JsonResponse
    {
        $request->validate(['email' => 'required|email|unique:users']);

        $token = Str::random();
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now(),
        ]);

        (new EmailService())->sendPasswordResetEmail($request, $token);

        return response()->json(['We have e-mailed your password reset link!']);
    }

    public function resetPassword(Request $request): JsonResponse
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $updatePassword = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();

        if (! $updatePassword) {
            return response()->json('Invalid token!', 403);
        }
        User::where('email', $request->email)->update(['password' => bcrypt($request->password)]);
        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return response()->json(['Your password has been changed!']);
    }
}
