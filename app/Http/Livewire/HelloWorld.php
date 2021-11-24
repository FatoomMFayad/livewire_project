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

    public function hydrate()
    {
        $this->name = 'hydrated@';
    }

    public function updated()
    {
        $this->name = 'updated';
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
