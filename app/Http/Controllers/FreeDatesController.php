<?php

namespace App\Http\Controllers;

use App\FreeDate;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class FreeDatesController extends Controller
{
    function generateDates()
    {
        $today = Carbon::today();
        $endday = Carbon::today()->addMonths(3);
        $dates = CarbonPeriod::create($today, $endday);

        $data = [];
        foreach ($dates as $date) {
            $row = ['date' => $date];
            $data[] = $row;
        }
        FreeDate::insert($data);

        return $data;
    }
}
