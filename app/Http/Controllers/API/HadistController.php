<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HadistController extends Controller
{
    use HttpResponse;

    public function getAllHadist()
    {
        $hadist = Http::get('https://api.hadith.gading.dev/books/abu-daud?range=1-20')['data'];
        return $this->success($hadist);
    }
}
