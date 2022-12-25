<?php

namespace App\Http\Livewire;

use App\Models\Reserve;
use App\Services\Calendar\Calendar;
use Carbon\Carbon;
use Livewire\Component;
use Morilog\Jalali\Jalalian;
use PDO;

class CalendarComponent extends Component
{
    public $month=null;

    public $dayName;

    public $date;

    public $day;

    public $monthName;

    public $timePartSelected = null;

    public $connectionModel = null;


    protected $rules =
        [
            'month'=>'required|numeric',
            'date'=>'required|array',
            'day'=>'required|numeric',
            'monthName'=>'required|string',
            'timePartSelected'=>'required',
            'connectionModel'=>'required'
        ];

    public function EmptyPartTime()
    {
        $date=collect($this->date);

        dd($date);
        // Reserve::where('reserve_time',)
    }

    public function render()
    {
        // if (!is_null($this->month))
        //     dd($this->month);
        return view('livewire.calendar-component');
    }   


    public function month()
    {
        return Calendar::getMounthDays($this->month);
    }

    public function showInfo($day,$month)
    {
        $date=Calendar::getDayInfo($day,$month);

        $this->dayName = $date->format('%A');

        $this->day = $date->format('d');

        $this->date=$date->toArray();

        $this->monthName = $date->format('%B');
    }

    public function selectPart($part)
    {
        $this->timePartSelected = $part;
    }

    public function selectConnectionType($type)
    {
        $this->connectionModel = $type;
    }

    public function btnClassPart($type)
    {
        if ($this->timePartSelected == $type)
            return 'c-badge-light';
        else
            return 'c-badge-light-outline';
    }

    public function btnClassConncetion($type)
    {
        if ($this->connectionModel == $type)
            return 'c-badge-light';
        else
            return 'c-badge-light-outline';
    }

    public function freeTime()
    {
        
        $date=new Jalalian(1401,$this->month,$this->day);
        $time = Reserve::where('reserve_time', $date->toCarbon()->toDateTimeString())->get('part');

        $parts=$time->map(function ($part){
            return $part->part;
        });

        if(count($parts)>1)
            return array_diff($parts->toArray(), $this->createPartTimeFromWorkTime());
        else
            return $this->createPartTimeFromWorkTime();
    }

    public function createPartTimeFromWorkTime()
    {
        $start = config('settings.work_time.start');

        $end = config('settings.work_time.end');

        $time = $end - $start;

        $time /= 2;

        $parts = [];
        for($i=0;$i<=$time;$i++)
        {
            if(($start+2) <= $end)
            {
                $parts[] = $start."-".($start+2);
                $start += 2;
            }
        }

       return $parts;
    }


    public function submitTime()
    {
        $this->checkAllVarable();
    }

    public function checkAllVarable()
    {
        $this->validate();

        $data = [
            'day' => $this->day,
            'month' => $this->month,
            'date' => $this->date,
            'part' => $this->timePartSelected,
            'conncetion' => $this->connectionModel
        ];

        $this->emitTo('reserve', 'recive',$data);
    }
}
