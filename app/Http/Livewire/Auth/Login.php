<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Psy\CodeCleaner\ReturnTypePass;

class Login extends Component
{
    public $username;

    public $password;

    public $cryptPassword;

    public $errorType=true;

    protected $rules = [
        'username' => 'required|min:2',
        'password' => 'required|min:8'
    ];


    public function login()
    {
        $data=$this->validate();

        $this->errorType = true;

        switch($this->checkPassword())
        {
            case null:
                $this->errorType = null;
                break;
            case true:
                $this->logined();
                    return redirect('admin');
                break;
            case false:
                $this->errorType = false;
                break;
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }

    private function user()
    {
        $user = User::where('username', $this->username)->orWhere('email', $this->username)->first();

        return $user;
    }

    private function checkPassword()
    {
        if (!is_null($this->user()))
            return Hash::check($this->password, $this->user()->password) ? true : false;
        else
            return null;
    }

    private function logined():void
    {
        if($this->checkPassword())
        {
            auth()->loginUsingId($this->user()->id);
        }
    }

    public function isFirst()
    {
        
    }
}
