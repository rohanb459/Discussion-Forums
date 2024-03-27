<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('Layouts.EditProfile', compact('loggedInUser'));
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
        $userInfo = Auth::user()->UserInfo;
        $userInfo->firstName = $validated['firstName'];
        $userInfo->lastName = $validated['lastName'];
        $userInfo->email = $validated['email'];
        $userInfo->photo = $uploadedFileUrl;
        $userInfo->location = $validated['location'];
        $userInfo->country = $validated['country'];
        $userInfo->about = $validated['about'];
        $userInfo->save();
        return "record updated successfullyy!!";

    }
}
