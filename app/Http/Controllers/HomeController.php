<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function getPosts()
    {
        $user=Auth::user();
        $userInfo = $user->UserInfo;
        $posts = Post::where('active', true)->orderBy("created_at","desc")->with("User.userInfo")->get();
        return view("Layouts.home", compact('posts', 'user', ));
    }

    public function getResolvedPosts()
    {
        $user=Auth::user();
        $userInfo = $user->UserInfo;
        $posts = Post::where('active', false)->orderBy("created_at","desc")->with("User.userInfo")->get();
        return view("Layouts.home", compact('posts', 'user'));
    }
}
