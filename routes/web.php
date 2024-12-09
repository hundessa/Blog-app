<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('frontend.index');
});
Route::get('/', [PostController::class, 'index']);

Route::get('/sign-up', function () {
    return view('components.frontend.user_-management.sign_-up');
})->name("sign-up");

Route::post('/sign-in', function () {
    return view('components.frontend.user_-management.sign_-in');
})->name("sign-in");