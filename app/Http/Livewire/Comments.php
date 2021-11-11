<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    private $comments;

    public function mount($comments)
    {
        $this->comments = $comments;
    }

    public function render()
    {
        return view('livewire.comments', ['comments' => $this->comments]);

    }
}
