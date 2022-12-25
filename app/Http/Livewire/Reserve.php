<?php

namespace App\Http\Livewire;

use App\Models\Type;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class Reserve extends Component
{
    public $selectedButtun=null;

    public $description;

    public $calander;

    protected $listeners = [
        'recive' => 'TimeParameter',
    ];

    public function TimeParameter($item)
    {
        if ($item != '')
            return $this->calander=$item;
    }



    public function updated($item)
    {
        $this->validateOnly($item);
    }
    public function render()
    {
        return view('livewire.reserve');
    }


    public function selectType($type)
    {
        $this->selectedButtun = $type;
    }

    public function btnClass($type)
    {
        if ($this->selectedButtun == $type)
            return 'c-btn-primary';
        else
            return 'c-btn-primary-outline';
    }


    public function reserveTime()
    {
        // dd($this->calander);   
        $date=new Jalalian(jdate()->now()->format('Y'),$this->calander['month'],$this->calander['day']);

        $data = [
            'type' => $this->selectedButtun,
            'description' => $this->description,
            'notification_type' => $this->calander['conncetion'],
            'status' => 'not-seen',
            'part' => $this->calander['part'],
            'reserve_time' => $date->toCarbon()->toDateTimeString(),
        ];

        auth()->user()->Reserves()->create($data);
    }
}
