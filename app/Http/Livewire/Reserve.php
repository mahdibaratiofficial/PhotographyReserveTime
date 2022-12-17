<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reserve extends Component
{
    public $name;

    public $number;
    public function render()
    {
        return view('livewire.reserve');
    }


    public function reserveTime()
    {
        dd($this->name);
    }

    public function isTrueNumber($number)
    {
        dd($number);
    }
}
