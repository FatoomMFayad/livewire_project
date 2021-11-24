<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Fatoom';
    public $loud = false;
    public $greeting = ['Hello'];

    public function resetName($name = 'Hanan')
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
