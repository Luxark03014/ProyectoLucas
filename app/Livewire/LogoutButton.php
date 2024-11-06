<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutButton extends Component
{
    public function logout()
    {
    
        Auth::logout(); 
        session()->flush(); 
        
        
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.logout-button');
    }
}
