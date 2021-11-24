<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Fatoom';

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
