<?php

namespace App\View\Components;

use App\Models\Reserve;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class AdminPanelInformation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-panel-information',
    [
        'unseen'=>$this->UnseenReserveRequests(),
        'today_work'=>$this->TodayWorks(),
    ]);
    }

    public function UnseenReserveRequests($status='not-seen')
    {
        return Reserve::where('status', $status)->count();
    }

    public function TodayWorks()
    {
        // return Carbon::now()->toTimeString();
        return Reserve::where('reserve_time' , Carbon::now()->toTimeString())->count();
    }
}
