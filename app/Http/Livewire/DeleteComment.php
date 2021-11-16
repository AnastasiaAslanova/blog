<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DeleteComment extends Component
{
    public $comment;

    public function delete()
    {
        if(Auth::user()->is_admin)
        {
            $this->comment->delete();
//        $post->refresh();
            $this->emit('refreshComments', $this->comment->post_id);
            $this->comment = null;
        }
//        return redirect()->to('/post/{slug}');
    }
    public function render()
    {
        return view('livewire.delete-comment', ['comment' => $this->comment]);
    }
}
