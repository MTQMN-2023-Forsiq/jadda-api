<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JadwalSholatController extends Controller
{

    use HttpResponse;

    public function getJadwalSholat($city)
    {
        $shedule_sholat = Http::get('https://api.aladhan.com/v1/timingsByCity/'.now()->format('d-m-Y').'?city='.$city.'&country=Indonesia&method=8')['data']['timings'];
        $national_date = now()->dayName.', '.now()->day.' '.now()->monthName.' '.now()->year;
        $hijriah_date = Http::get('http://api.aladhan.com/v1/gToH/07-12-2014')['data']['hijri'];
        return $this->success([
            "national_date" => $national_date,
            "hijriah_date" => $hijriah_date['day'].' '.$hijriah_date['month']['en'].' '.$hijriah_date['year'].'H',
            "times" => $shedule_sholat,
        ]);
    }

}
