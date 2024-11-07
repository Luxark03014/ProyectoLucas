<?php


use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Models\User;
use App\Http\Middleware\isEmployee;
use App\Http\Middleware\isAdmin;








Route::view('/', 'sections.home')->name('home');

Route::middleware('auth')->group(function () {
   
    Route::middleware(isEmployee::class)->group(function () {
        Route::view('/employee', 'sections.employee')->name('employee');
    });

    Route::middleware(isAdmin::class)->group(function () {
        Route::view('/admin', 'sections.admin')->name('admin');
    });
});

Route::view('/login', 'sections.login')->name('login');
Route::view('/upload', 'sections.upload')->name('upload');

