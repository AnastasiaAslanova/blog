<?php

namespace App\Http\Livewire;


use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentCreate extends Component
{
    public $saveSuccess = false;
    public $comment;
    public $post;

    protected $rules = [
        'comment.content' => 'required|min:6',
    ];

    public function mount($post){
        $this->post = $post;
        $this->comment = new Comment();
    }

    public function saveComment(){
        $this->comment->post_id = $this->post->id;
        $this->comment->user_id = Auth::id();
        $this->post->comments()->save($this->comment);
        $this->emit('refreshComments', $this->post->id);
//        $this->comment->refresh();
//        $this->comment->save();
        $this->saveSuccess = true;
    }

    public function render()
    {
        return view('livewire.comment-create');
    }
}
