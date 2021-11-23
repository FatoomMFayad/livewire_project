<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $title = 'Hello World!';
    public $body;
    public $active = false;
    public $country = "PS";
    public function render()
    {
        return view('livewire.hello-world',[
            'name' => 'Fatoom Fayad'
        ]);
    }
}
