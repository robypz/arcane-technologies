<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Layout('components.layouts.app')]
#[Title('ArcaneTechnologies - Home')]
class Home extends Component
{
    public $title = 'Home';

    public function render()
    {
        return view('livewire.home');
    }
}
