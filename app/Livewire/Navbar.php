<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    
    public function isAuthenticated()
    {
        return Auth::check();
    }

    public function render()
    {
        return view('components.navbar');
    }
}
