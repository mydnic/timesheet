<?php

namespace App\Http\Controllers;

use App\Holiday;
use App\Services\MonthService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $month;

    public function __construct(MonthService $month)
    {
        $this->month = $month;
    }

    public function index()
    {
        $holidays = Holiday::whereMonth('date', $this->month->format('m'))->get();
        return view('timesheet.home')
            ->with('month', $this->month)
            ->with('holidays', $holidays);
    }

    public function store(Request $request)
    {
        return view('timesheet.pdf')->with('month', $this->month);
    }
}
