<?php
namespace App\Services\Calendar;
use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
{
    public function register()
    {
        return $this->app->singleton('calendar', function () {
            return new CalendarService();
        });
    }
}

?>