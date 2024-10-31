<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Models\User;


Route::get('/', function () {
 //   return view('welcome');
    $roles = Roles::all();

    dd($roles);
});




Route::middleware('auth')->get('/home', function () {
    return view('home', ['user' => Auth::user()]);
})->name('home');


Route::get('/login', function() {
    return view('login');
});


Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


Route::get('/upload', function() {
    return view('upload');
})->name('upload.form');

Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload');
?>