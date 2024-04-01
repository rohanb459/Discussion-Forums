<?php

use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\EditProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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
});

Route::get('home', [HomeController::class,'getPosts'])->name('home');

Route::get('create-post', [CreatePostController::class,'viewReturn'])->name('create-post');

Route::get('edit-profile',[EditProfileController::class, 'getInfo'] )->name('edit-profile');
Route::post('save-changes', [EditProfileController::class, 'saveChanges'])->name('save-changes');

Route::post('create-post', [CreatePostController::class,'createPost'])->name('addNewPost');

Route::post('register', [RegisterController::class, 'register'])->name("register");
Route::post('login', [RegisterController::class, 'login'])->name("login");






