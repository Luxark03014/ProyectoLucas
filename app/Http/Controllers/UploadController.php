<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UploadController extends Controller
{

    public function uploadFile(Request $request)
    {

        $request->validate([
            'file' => 'required|file', 
        ]);

        $request->file('file')->store('uploads', 'public');

        

        return redirect()->route('home');
    }

}