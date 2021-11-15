<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Comments extends Component
{
    public $post;
//    private $comments;

    protected $listeners = ['refreshComments'];

//    public function mount($comments)
//    {
//        var_dump($comments);die;
//        $this->comments = $comments;
//    }

    public function refreshComments(Post $post)
    {
//        var_dump($post->comments()->count());die;
        $this->post = $post;
//        return $this->render();
//        $this->comments = $post->comments;
//        $this->render();
//        refresh();

    }

    public function render()
    {
//        var_dump($this->comments);die();
        return view('livewire.comments', ['post' => $this->post]);

    }
}
