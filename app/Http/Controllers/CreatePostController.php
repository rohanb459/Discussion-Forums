<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CreatePostController extends Controller
{
    //
    public function viewReturn()
    {
        $userInfo = Auth::user()->UserInfo;
        return view("Layouts.CreatePost", compact("userInfo"));
    }

    public function createPost(Request $request)
    {
        $validator = $request->validate([
            'caption' => 'required',
            'imageUpload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation rules for image upload
        ]);

        $uploadedFileUrl=null;
        if($request->hasFile("imageUpload"))
        {
            $uploadedFileUrl = cloudinary()->upload($request->file('imageUpload')->getRealPath())->getSecurePath();
        }
        $user = Auth::user();
        $user->Posts()->create([
            "caption"=>$request->caption,
            "photo"=> $uploadedFileUrl
        ]);
        return redirect()->route("home")->with("success",200);
    }
}
