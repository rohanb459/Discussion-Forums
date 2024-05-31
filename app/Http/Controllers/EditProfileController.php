<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    //
    public function getInfo()
    {
        $user =  Auth::user();
        $loggedInUser = User::find($user->id)->UserInfo;
        // return $loggedInUser;
        return view('Layouts.EditProfile', compact('loggedInUser', 'user'));
    }

    public function saveChanges(Request $req):mixed
    {
        $validated = $req->validate([
                'firstName'=> 'required',
                'lastName'=> 'required',
                "imageUpload"=>'required',
                'about'=>'required',
                'location'=>'required',
                'country'=>'required',
                'email'=>'required'
        ]);
        $uploadedFileUrl = cloudinary()->upload($req->file('imageUpload')->getRealPath())->getSecurePath();
        $user = Auth::user();
        $userInfo = $user->userInfo;
        if($userInfo==null)
        {
            $userInfo = new Userinfo();
            $userInfo->firstName = $req->firstName;
            $userInfo->lastName = $req->lastName;
            // $userInfo->email = $req->email;
            $userInfo->photo = $uploadedFileUrl;
            $userInfo->location = $req->location;
            $userInfo->country = $req->country;
            $userInfo->about = $req->about;
            // dd($user);
            $user->Userinfo()->save($userInfo);
        }
        else
        {
            $userInfo->firstName = $req->firstName;
            $userInfo->lastName = $req->lastName;
            $userInfo->email = $req->email;
            $userInfo->photo = $req->imageUpload;
            $userInfo->location = $req->location;
            $userInfo->country = $req->country;
            $userInfo->about = $req->about;
            $userInfo->save();
        }
        return "record updated successfullyy!!";
    }
}
