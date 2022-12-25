<?php
namespace App\Services\Calendar;
interface CalendarInterFace{
    public function getMounthDays($month=null):array;

    public function getMonths():array;

    public function getDayInfo(string $day):array;

}


?>