<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tafsir;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TafsirController extends Controller
{

    use HttpResponse;

    public function getAllTafsir()
    {
        $tafsirs = Tafsir::all();
        $data = [];
        $no = 1;
        foreach ($tafsirs as $tafsir){
            $data[] = [
                "id" => $no++,
                "image" => URL::to($tafsir->image),
            ];
        }
        return $this->success($data);
    }

}
