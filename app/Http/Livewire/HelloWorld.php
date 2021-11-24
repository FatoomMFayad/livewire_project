<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $names = ['Fatoom', 'Omar', 'Zain'];

    public function render()
    {
        return view('livewire.hello-world');
    }
}
