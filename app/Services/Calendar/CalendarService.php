<?php
namespace App\Services\Calendar;
use Morilog\Jalali\Jalalian;
use PhpParser\Node\Stmt\Return_;

class CalendarService 
 
{

    public function date($month=null)
    {
        $date=collect();

        $date->instace=new Jalalian(Jalalian::now()->format('Y'), is_null($month) ? 9 : $month, 1);

        $date->today=Jalalian::now();

        $date->start = $date->instace->getFirstDayOfMonth();

        $date->last=new Jalalian(Jalalian::now()->format('Y'),
                                 $date->instace->format('m'), $date->instace->getMonthDays());
        return $date;
    }

    public function getDayInfo(string $day,$month)
    {
        $date = new Jalalian(jdate()->now()->format('Y'), $month, $day);

        return $date;
    }

    public function getMonths()
    {
  
    }

    public function getMounthDays($month = null): array
    {
        $date = $this->date($month);

        if ($date->instace->format('m') == $date->today->format('m'))
            return $this->isThisMonth();
        elseif ($date->instace->lessThan($date->today))
            return $this->beforeMonth($date);
        elseif ($date->instace->greaterThan($date->today))
            return $this->afterMonth($date);

        // foreach(range($date->start->format('d'),$date->last->format('d')) as $days)
        // {
        //     if($date->today->greaterThan($this->date()->instace))
        //     {
                
        //     }
        //     else
        //     {
        //         $daysResult['not-finished'][] = $days;  
        //     }
        // }
        // return $daysResult;
    }

    private function isThisMonth():array
    {
        $daysResult = [];
        $date = $this->date();
        foreach (range($date->start->format('d'), $date->last->format('d')) as $days) {
            if ($date->today->format('d') > $days)
                $daysResult['finished'][] = $days;
            else
                $daysResult['not-finished'][] = $days;
        }
    //    just for more information
        $daysResult['date'] = $date;

        return $daysResult;
    }

    private function beforeMonth($date):array
    {
        $daysResult=[];
       foreach(range(1,$date->last->format('d')) as $days)
       {
            $daysResult['finished'][] = $days;
       }

    //    just for more information
       $daysResult['date'] = $date;

        return $daysResult;
    }

    private function afterMonth($date):array
    {
        $daysResult=[];
       foreach(range(1,$date->last->format('d')) as $days)
       {
            $daysResult['not-finished'][] = $days;
       }
    //    just for more information
       $daysResult['date'] = $date;
        return $daysResult;
    }

    
}

?>