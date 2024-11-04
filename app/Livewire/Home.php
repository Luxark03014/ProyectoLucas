<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // Asegúrate de incluir esto

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

        $this->files = $this->listFiles(); // Obtener los archivos directamente
    }

    // Método para listar archivos
    public function listFiles()
    {
        $files = Storage::disk('public')->files('uploads');

        // Comprobar si no hay archivos
        if (empty($files)) {
            return []; 
        }

        return array_map(function ($file) {
            return Storage::url($file); // Devuelve la URL accesible del archivo
        }, $files);
    }

    public function render()
    {
        return view('livewire.home'); // Asegúrate de que esta vista existe
    }
}
