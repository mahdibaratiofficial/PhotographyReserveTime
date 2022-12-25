<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UsernameField extends Component
{
    public $username;

    public $email;

    public $valid = false;

    protected $rules = [
        'username'=>'required|min:2|max:128|unique:users',
        'email'=>'required|email|unique:users,email'
    ];
    public function render()
    {
        return view('livewire.username-field');
    }

    // public function checkUserName()
    // {
    //     $this->validateOnly('username');
    // }

    public function updated($item)
    {
        $validate=$this->validateOnly($item);

        if(is_array($validate))
        {
            $this->valid = true;
        }
    }
}
