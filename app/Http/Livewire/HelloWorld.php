<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Fatoom';

    public function resetTitle($title)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.hello-world');
    }
}
