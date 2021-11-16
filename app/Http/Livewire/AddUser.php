<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use SebastianBergmann\Diff\Exception;

class AddUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_repeat;

    public function addUser()
    {
        try {
            $user = new User([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
            ]);
            $user->save();
            return redirect()->route('userList');
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if (1062 == $errorCode) {
                Session::flash('error', 'User already exist');
            }
        }

    }

    public function render()
    {
        return view('livewire.add-user')
            ->extends('layouts.app')
            ->slot('content');
    }
}
