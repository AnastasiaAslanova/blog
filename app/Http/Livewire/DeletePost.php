<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DeletePost extends Component
{
    public $post;

    public function delete()
    {
        if (Auth::user()->is_admin) {
            $this->post->delete();
            return redirect()->to('/');
        }
    }

    public function render()
    {
        return view('livewire.delete-post');
    }
}
