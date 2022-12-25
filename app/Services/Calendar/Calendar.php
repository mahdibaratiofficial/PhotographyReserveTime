<?php
namespace App\Services\Calendar;

use Illuminate\Support\Facades\Facade;

class Calendar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'calendar';
    }
}

?>