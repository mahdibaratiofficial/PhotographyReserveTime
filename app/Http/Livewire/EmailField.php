<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmailField extends Component
{
    public $email;

    protected $rules=[
        'email'=>'required|email|unique:users,email'
    ];

    public function updated($item)
    {
        $this->validateOnly($item);
    }
    public function render()
    {
        return view('livewire.email-field');
    }
}
