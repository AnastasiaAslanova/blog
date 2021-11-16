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
    public $saveCommentSuccess;
    public $isActive = true;

    protected $rules = [
        'comment.content' => 'required|min:6',
    ];

    public function saveComment(){
        $comment = new Comment([
            'post_id' => $this->post->id,
            'user_id' => Auth::id(),
            'content' => $this->comment
        ]);
//        $this->comment->post_id = $this->post->id;
//        $this->comment->user_id = Auth::id();
        $comment->save();
        $this->emit('refreshComments', $comment->post_id);
        $this->saveCommentSuccess = 'Comment was posted!';
        $this->saveSuccess = true;
        $this->comment = '';
    }

    public function render()
    {
        return view('livewire.comment-create');
    }
}
