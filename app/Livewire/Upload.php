<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads; // Asegúrate de incluir esto
use Illuminate\Support\Facades\Storage;

class Upload extends Component
{
    use WithFileUploads; // Añadir el trait aquí

    public $file;

    protected $rules = [
        'file' => 'required|file',
    ];

    public function uploadFile()
    {
        $this->validate();

        
        $path = $this->file->store('uploads', 'public');

    
        

        
        $this->file = null;
        return view('livewire.home');
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
