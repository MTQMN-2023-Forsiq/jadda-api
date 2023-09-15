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
        $surahs = Http::get('https://api.quran.gading.dev/surah')['data'];
        $data = [];
        foreach ($surahs as $surah){
            //return $surah;
            $data[] = [
                "id" => $surah['number'],
                "short_name" => $surah["name"]['short'],
                "name" => $surah["name"]['transliteration']['id'],
                "revelation" => $surah["revelation"]['id'],
                "ayat" => $surah['numberOfVerses'],
                "translation" => $surah['name']['translation']['id'],
            ];
        }
        return $this->success($data);
    }

    public function getSurahById($id)
    {
        $surah = Http::get('https://api.quran.gading.dev/surah/'.$id)['data'];
        $verses = [];
        foreach ($surah['verses'] as $verse){
            $verses[] = [
                'number' => $verse['number']['inSurah'],
                'text_arab' => $verse['text']['arab'],
                'translation' => $verse['translation']['id'],
                'audio' => $verse['audio']['secondary'][0],
            ];
        }
        $data = [
            "id" => $surah['number'],
            "ayat" => $surah['numberOfVerses'],
            "short_name" => $surah["name"]['short'],
            "name" => $surah["name"]['transliteration']['id'],
            "revelation" => $surah["revelation"]['id'],
            "verses" => $verses,
        ];
        return $this->success($data);
    }

}
