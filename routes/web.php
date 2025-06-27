<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;

// Route::get('/', function () {
//     return view('dashboard');
// });
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// })->name('mahasiswa');

Route::get('/login', [Authcontroller::class, 'showLogin'])->name('login');
Route::post('/login', [Authcontroller::class, 'login']);
Route::middleware('auth')->group(function () {
   Route::get('/', function () {
       return view('dashboard');
   }); 

   Route::get('/mahasiswa', function () {
       return view('mahasiswa');
   })->name('mahasiswa');

   Route::get('/logout', [Authcontroller::class, 'logout'])->name('logout');
});