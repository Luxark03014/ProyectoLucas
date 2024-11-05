<?php

namespace App\Http\Livewire;

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
        return view('livewire.home'); 
    }
}
