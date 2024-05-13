<?php

use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\EditProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\verifyEmailController;
use App\Http\Controllers\verifyHomeController;
use App\Http\Controllers\TestController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Layouts.LoginAndRegister');
})->name('landingPage');

Route::get('verify-email/{token}', [verifyEmailController::class,'verifyEmail'])->name('verifyEmail');

Route::get('home', [HomeController::class,'getPosts'])->name('home');

Route::get('create-post', [CreatePostController::class,'viewReturn'])->name('create-post');

Route::get('edit-profile',[EditProfileController::class, 'getInfo'] )->name('edit-profile');
Route::post('save-changes', [EditProfileController::class, 'saveChanges'])->name('save-changes');

Route::post('create-post', [CreatePostController::class,'createPost'])->name('addNewPost');
Route::get('logout',[LogOutController::class, 'logOut'] )->name('logout');


Route::post('register', [RegisterController::class, 'register'])->name("register");
Route::post('login', [RegisterController::class, 'login'])->name("login");

Route::delete('/delete/posts/{postId}', [CreatePostController::class, 'deletePost'])->name("delete-post");

Route::get('/post/move/{postId}', [CreatePostController::class, 'moveToResolve'])->name('move-post');

Route::get('/posts/resolve',[HomeController::class, 'getResolvedPosts'])->name('resolved-queries');
