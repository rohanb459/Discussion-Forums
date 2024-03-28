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
        $posts = Post::orderBy("created_at","desc")->get();
        // return $userInfo;
        return view("Layouts.home", compact('userInfo','posts'));
    }
}
