<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('ArcaneTechnologies - Sign in')]
class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login');
    }
}
