<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; 

class Home extends Component
{
   
    public $user;
    public $files = [];

    public function mount()
    {
        $this->user = Auth::user();

        if (!$this->user) {
            return redirect('/login');
        }

        $this->files = $this->listFiles(); 
        
    }

 
    public function listFiles()
{
    $files = \App\Models\UploadedFile::all(); 

    if ($files->isEmpty()) {
        return [];  
    }

    return $files->map(function ($file) {
        $filePath = storage_path('app/public/' . $file->filepath);
        
        if (!file_exists($filePath)) {
            
            $file->delete();
            return null;  
        }

      
        $user = $file->user;
     

        return [
            'filename' => $file->filename,
            'url' => Storage::url($file->filepath),
            'user' => $user ? $user->name : 'Desconocido',
            'role' => $user->roles->title,
        ];
    })->filter()->toArray();  
}


    public function render()
    {
        return view('livewire.home', [
            'files' => $this->files,
        ]);
    }
}
