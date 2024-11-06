<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class Upload extends Component
{
    public function mount()
    {
        
        $this->user = Auth::user();

        if (!$this->user) {
            return redirect('/login');
        }
    }
    use WithFileUploads;
    public $user;
    public $file;
    

    protected $rules = [
        'file' => 'required|file',
    ];

    public function uploadFile()
    {
        $this->validate();

        
        $path = $this->file->store('uploads', 'public');
        

        $uploadedFile = \App\Models\UploadedFile::create([
            'filename' => $this->file->getClientOriginalName(),
            'filepath' => $path,
            'filetype' => $this->file->getClientMimeType(),
            'user_id' => $this->user->id, 
            
        ]);

        
        $this->file = null;

   
        return redirect()->route('home')->with('message', 'Archivo subido exitosamente.');

        
        
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
