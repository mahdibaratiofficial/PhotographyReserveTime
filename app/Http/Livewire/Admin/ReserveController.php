<?php

namespace App\Http\Livewire\Admin;

use App\Models\Reserve;
use Livewire\Component;

class ReserveController extends Component
{
    public function render()
    {
        return view('livewire.admin.reserve-controller');
    }


    public function allReserves()
    {
        return Reserve::paginate(20);
    }

    public function theReserveDone()
    {
        return Reserve::where('status','done')->get();
    }
}
