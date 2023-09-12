<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tafsir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TafsirController extends Controller
{

    public function getAllTafsir()
    {
        $tafsirs = Tafsir::all();
        $data = [];
        foreach ($tafsirs as $tafsir){
            $data[] = [
                "id" => $tafsir->id,
                "image" => URL::to($tafsir->image),
            ];
        }
        return response()->json($data, 200);
    }

}
