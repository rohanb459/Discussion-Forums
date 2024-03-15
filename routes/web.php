<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
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

Route::get('home', function(){
    $user = Auth::user();
    return view('Layouts.home', compact('user'));
})->name('home');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('edit-profile', function(){
    return view('Layouts.EditProfile');
})->name('edit-profile');

Route::post('register', [RegisterController::class, 'register'])->name("register");
Route::post('login', [RegisterController::class, 'login'])->name("login");

Route::middleware('auth:api')->group(function(){
    Route::resource('products', ProductController::class);
});
