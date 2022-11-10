<?php
declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class EmailService
{
    /*==========================================================================================================
                                        PASSWORD RESETS
    ==========================================================================================================*/

    public function sendPasswordResetEmail($request, $token): void
    {
        $data = [
            'firstname' => User::where('email', $request->input('email'))->value('firstname'),
            'url' => "https://carstore.co.ke/password-reset?email=$request->email&token=$token",
        ];
        //Mail::to($request->email)->send(new PasswordResetEmail($data));
    }

    /*==========================================================================================================
                                        USER EMAILS
    ==========================================================================================================*/

    public function newUserEmail($request): void
    {
        $data = [
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => 'same password you used to open your account',
        ];
        //Mail::to($data['email'])->send(new DealerSignupEmail($data));
    }
}
