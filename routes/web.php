<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\Roles;


Route::get('/', function () {
 //   return view('welcome');
    $roles = Roles::all();

    dd($roles);
});




Route::get('/home', function () {
    return view('home');

})->name('home');


Route::get('/login', function() {
    return view('login');
});
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

?>