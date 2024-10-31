<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UploadController;

class HomeController extends Controller
{
    public function index()
{
    
    $user = Auth::user();
    
    if (!$user) {
        return redirect('/login'); 
    }
    // Añade esta línea para verificar la autenticación

    $filesController = new UploadController();
    $files = $filesController->listFiles(); 
   
    return view('home', compact('user', 'files'));
}

}
