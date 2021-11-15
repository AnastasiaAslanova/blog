<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeletePost extends Component
{
    public $post;

    public function delete()
    {
        $this->post->delete();
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.delete-post');
    }
}
