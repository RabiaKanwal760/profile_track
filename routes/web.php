<?php

use App\Http\Controllers\UserProfileTrakeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard.dashboard');
});
Route::get('/user', function () {
    return view('userprofiles.profile');
});
Route::get('/form', function () {
    return view('forms.singup');
});
Route::get('/error', function () {
    return view('error.error');
});
Route::get('/gallery', function () {
    return view('gallery.gallery');
});
Route::get('/records', function () {
    return view('employee records.record');
});
Route::get('/home', [UserProfileTrakeController::class, 'index'])->name('home');
// Route::get('/user', [UserProfileTrakeController::class, 'user'])->name('user');
Route::post('/store', [UserProfileTrakeController::class, 'store'])->name('profile.store');

