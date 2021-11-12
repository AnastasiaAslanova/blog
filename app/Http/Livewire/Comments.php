<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    private $comments;

    protected $listeners = ['refreshComments'];

    public function mount($comments)
    {
        $this->comments = $comments;
    }

    public function refreshComments(\App\Models\Post $post)
    {
        $this->comments = $post->comments;
    }

    public function render()
    {
        return view('livewire.comments', ['comments' => $this->comments]);

    }
}
