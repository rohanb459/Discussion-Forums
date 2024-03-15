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

class RegisterController extends BaseController
{
    //
    public function register(Request $request): JsonResponse{
        // Log::info("req here");
            $validator = Validator::make($request -> all(),[
                'name'=>'required',
                'email'=> 'required|email',
                'password'=> 'required',
                'c_password'=> 'required|same:password'
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

            return $this->sendResponse($success, 'User registered successfully.');
    }

    public function login(Request $request)
    {
        // dd("here login");
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('token')->accessToken;
            $success['name'] = $user->name;

            return redirect()->route('home');
            // return $this->sendResponse($success, 'User login successful.');
        }
        else{
            return $this->sendError('Unauthorized.', ['error'=>'Unauthorised']);
        }
    }
}
