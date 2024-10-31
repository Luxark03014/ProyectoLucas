<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{

    public function uploadFile(Request $request)
    {

        $request->validate([
            'file' => 'required|file', 
        ]);

        $path = $request->file('file')->store('uploads', 'public');

        

        return redirect()->route('home')->with('uploaded_file', basename($path));
    }

    public function listFiles()
{
    $files = Storage::disk('public')->files('uploads');

  
    if (empty($files)) {
        return []; 
    }

    return array_map(function ($file) {
        return Storage::url($file);
    }, $files);
}


}