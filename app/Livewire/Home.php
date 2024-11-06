<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; 

class Home extends Component
{
    public $uploadedFile;
    public $user;
    public $files = [];

    public function mount()
    {
        $this->user = Auth::user();

        if (!$this->user) {
            return redirect('/login');
        }

        $this->files = $this->listFiles(); 
        $this->uploadedFile = \App\Models\UploadedFile::latest()->first();
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

    public function render()
    {
        return view('livewire.home', [
            'uploadedFile' => $this->uploadedFile,
        ]);
    }
}
