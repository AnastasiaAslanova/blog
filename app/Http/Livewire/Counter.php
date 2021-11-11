<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function dicrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter')->layout('layouts.app-empty');
    }
}
