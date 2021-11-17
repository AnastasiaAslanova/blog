<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentsSection extends Component
{
    /**
     * @var \App\Models\Post
     */
    public $post;
    public $saveCommentSuccess;
    public $comment;

    protected $rules = [
        'comment' => ['required', 'min:4']
    ];

    public function publishComment()
    {
        $this->validate();

        Comment::create([
            'post_id' => $this->post->id,
            'user_id' => Auth::user()->id,
            'content' => $this->comment
        ]);
        $this->saveCommentSuccess = 'Comment was posted!';
        $this->post->refresh();
        $this->comment = '';
    }

    public function delete(Comment $comment)
    {
        if(Auth::user()->is_admin)
        {
            $comment->delete();
            $this->post->refresh();
            $this->comment = null;
        }
    }

    public function render()
    {
        return view('livewire.comments-section', ['comment' => $this->comment]);
    }
}
