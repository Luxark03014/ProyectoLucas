<?php


use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Models\User;









Route::view('/home', 'sections.home');
Route::view('/login', 'sections.login')->name('login');
Route::view('/upload', 'sections.upload')->name('upload');

