<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $comment;

//    public function mount($comment)
//    {
//        $this->comment = $comment;
//    }

//    public function delete()
//    {
//        $this->comment->delete();
//        $this->emit('refreshComments', $this->comment->post_id);
//    }

    public function render()
    {
        return view('livewire.comment',  ['comment' => $this->comment]);
    }
}
