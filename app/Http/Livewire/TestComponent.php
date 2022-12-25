<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestComponent extends Component
{
    public $foo;


    public function mount()
    {
        $this->foo = 'mahdi';
    }

    public function getBarProperty()
    {
        
        return $this->foo.="moghaddam";
    }


    public function increment()
    {
        $this->foo.='Barati';
    }
    public function render()
    {
        return view('livewire.test-component');
    }
}
