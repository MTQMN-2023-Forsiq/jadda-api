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
        //$hijriah_date = Http::get('http://api.aladhan.com/v1/gToH/'.now()->format('d-m-Y'))['data']['hijri'];
        $hijriah_date = Http::get('https://service.unisayogya.ac.id/kalender/api/masehi2hijriah/muhammadiyah/'.now()->format('Y/m/d'));
        return $this->success([
            "national_date" => $national_date,
            //"hijriah_date" => $hijriah_date['day'].' '.$hijriah_date['month']['en'].' '.$hijriah_date['year'].'H',
            "hijriah_date" => $hijriah_date['tanggal'].' '.$hijriah_date['namabulan'].' '.$hijriah_date['tahun'].'H',
            "times" => $shedule_sholat,
        ]);
    }

}
