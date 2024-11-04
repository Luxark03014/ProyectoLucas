<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Upload extends Component
{
    public $file;
    public $uploadedFile;

    protected $rules = [
        'file' => 'required|file',
    ];

    public function uploadFile()
    {
        $this->validate();

        $path = $this->file->store('uploads', 'public');

        $this->uploadedFile = basename($path);

      
        session()->flash('message', 'Archivo subido exitosamente.');
    }

    public function listFiles()
    {
        $files = Storage::disk('public')->files('uploads');

        return array_map(function ($file) {
            return Storage::url($file);
        }, $files);
    }

    public function render()
    {
        return view('livewire.upload', [
            'files' => $this->listFiles(), // Listar archivos para mostrar en la vista
        ]);
    }
}
