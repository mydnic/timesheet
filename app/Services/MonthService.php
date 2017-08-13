<?php

namespace App\Services;

use Carbon\Carbon;

class MonthService extends Carbon
{
    public function days()
    {
        $days = collect();
        $start = self::now()->startOfMonth();
        $end = $start->copy()->endOfMonth();
        while ($start->lte($end)) {
            $days->push($start->copy());
            $start->addDay();
        }
        return $days;
    }
}
