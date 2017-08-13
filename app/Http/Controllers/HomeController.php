<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Services\MonthService;

class HomeController extends Controller
{
    protected $month;

    public function __construct(MonthService $month)
    {
        $this->month = $month;
    }

    public function index()
    {
        return view('timesheet.home')->with('month', $this->month);
    }

    public function store(Request $request)
    {
        // return $request->all();
        return view('timesheet.pdf')->with('month', $this->month);
    }
}
