<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{

    use HttpResponse;

    public function getAllSurah()
    {
        $surah = Http::get('https://api.quran.gading.dev/surah')['data'];
        return $this->success($surah);
    }

    public function getSurahById($id)
    {
        $surah = Http::get('https://api.quran.gading.dev/surah/'.$id)['data'];
        return $this->success($surah);
    }

}
