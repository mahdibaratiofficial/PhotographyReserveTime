<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $username;

    public $name;

    public $email;

    public $password;

    public $password_confirmation;

    public $cryptPass;

    protected $rules = [
        'username' => 'required|min:2|max:128|unique:users,username',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'password_confirmation'=>'required',
        'name'=>'required|min:3|max:30|string'
        // fix conf pass
    ];

    public function register()
    {
        $data = $this->progressDatas();

        $this->createUser($data);

    }

    public function updated($item)
    {
        $this->validateOnly($item);
    }
    public function render()
    {
        return view('livewire.auth.register');
    }

    private function progressDatas()
    {

        $data = $this->validate();

        $this->cryptPass=bcrypt($data['password']);

        unset($data['password_confirmation']);
        unset($data['password']);

        $data['password'] = $this->cryptPass;

        return $data;
    }

    private function createUser($item)
    {
        if ($this->isFirst())
            $item['is_admin'] = true;

        User::create($item);

        return redirect(url('auth/login'));
    }

    public function isFirst()
    {
        return count(User::all())<1 ? true : false;
    }
}
