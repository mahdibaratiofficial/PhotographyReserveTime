<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebsiteInfoController extends Controller
{
    public function UnseenReserveRequests($status)
    {
        return Reserve::where('status', $status)->count();
    }

    public function TodayWorks()
    {
        return Reserve::where('reserve_time' == Carbon::now()->toTimeString())->count();
    }
}
