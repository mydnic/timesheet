<?php

namespace App\Http\Controllers\Api;

use App\Holiday;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HolidayController extends Controller
{
    public function isHoliday()
    {
        $today = Carbon::now();

        if ($today->isWeekend()) {
            return response()->json([
                'holiday' => true
            ]);
        } else {
            $holiday = Holiday::whereDate('date', $today->format('Y-m-d'))->first();
            if ($holiday and $holiday->am and $holiday->pm) {
                return response()->json([
                    'holiday' => true
                ]);
            }
        }

        return response()->json([
            'holiday' => false
        ]);
    }
}
