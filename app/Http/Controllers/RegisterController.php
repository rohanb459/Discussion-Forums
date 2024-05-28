<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleEmail;

class RegisterController extends BaseController
{
    //
    public function verifyEmail($email)
    {
        $randomVariable = Str::random(40);
        $domain=URL::to("/");
        $url = $domain.'/verify-email/'.$randomVariable;

        $maildata = [
            'title'=> 'Email Verification',
            'url'=> $url,
            'body'=>'Please Check your Email'
        ];

        Mail::to($email)->send(new SampleEmail($maildata));
        $user = User::where('email', $email)->first();
        $user -> remember_token = $randomVariable;
        $user->save();

        return response()->json(['success'=>true, 'msg'=>'Mail Successfully Sent.']);
    }
    public function register(Request $request): JsonResponse{
        // Log::info("req here");
            $validator = Validator::make($request -> all(),[
                'name'=>'required',
                'email'=> 'required|email',
                'password'=> 'required',
                'c_password'=> 'required|same:password',
                'role'=> 'required'
            ]);

            if($validator -> fails())
            {
                return $this -> sendError('Validation Error.', $validator->errors());
            }

            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);
            $success['token']=$user->createToken('token')->accessToken;
            $success['name']=$user->name;

            $this->verifyEmail($request->email);

            return $this->sendResponse($success, 'User registered successfully.');
    }

    public function login(Request $request)
    {
        $email = $request->email;

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $user = Auth::user();
            if($user->role != $request->role)
            return "Not authorized as ".$request->role;

            // $success['token'] = $user->createToken('token')->accessToken;
            $success['name'] = $user->name;

            if($user->is_verified == false)
            {
                return "verify your email first";
            }

            if($user->userInfo == null)
            {
                return redirect()->route('edit-profile');
            }
            return redirect()->route('home');
            // return $this->sendResponse($success, 'User login successful.');
        }
        else{
            return $this->sendError('Unauthorized.', ['error'=>'Unauthorised']);
        }
    }
}
