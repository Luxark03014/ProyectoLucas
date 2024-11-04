<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UploadController;

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

        $filesController = new UploadController();
        $this->files = $filesController->listFiles();
    }

    public function render()
    {
        return view('livewire.home'); // Asegúrate de que esta vista existe
    }
}
