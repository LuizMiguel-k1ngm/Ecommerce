<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{   
    public $color = "white";
    public $nome = "luiz";
    public function render()
    {
        return view('livewire.hello-world' , [
        ]);
    }
}