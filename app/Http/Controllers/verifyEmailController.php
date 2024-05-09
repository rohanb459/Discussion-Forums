<?php

namespace App\Http\Controllers;

use App\Mail\SampleEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
class verifyEmailController extends Controller
{
    //
    public function verifyEmail($token)
    {
        $user = User::where("remember_token", $token)->first();
        if (!$user)
        {
            return redirect()->back()->with("error","Register First");
        }
        else
        {
            $user->remember_token = "";
            $user->email_verified_at = now();
            $user->is_verified = true;
            $user->save();
        }
        return "User Verified";
    }
}
