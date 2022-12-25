<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PasswordFiled extends Component
{
    public $password;

    protected $rules = [
        'password' => 'required|min:8'
    ];

    public function updated($item)
    {
        $this->validateOnly($item);
    }



    public function checkPass($Conf)
    {
        if($Conf!=$this->password)
        {
            $this->addError('confirm', 'پسوورد ها مساوی نیستند');
        }
    }
    public function render()
    {
        return view('livewire.password-filed');
    }
}
