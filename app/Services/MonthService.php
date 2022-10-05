<?php

namespace App\Services;

use Carbon\Carbon;

class MonthService extends Carbon
{
    public function days()
    {
        if (request()->has('month')) {
            $start = self::now()->month(request('month'))->startOfMonth();
        } else {
            $start = self::now()->startOfMonth();
        }
        
        $days = collect();
        
        $end = $start->copy()->endOfMonth();
        while ($start->lte($end)) {
            $days->push($start->copy());
            $start->addDay();
        }
        return $days;
    }
}
