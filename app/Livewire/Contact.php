<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('ArcaneTechnologies - Contact')]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact');
    }
}
