<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Short;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ShortController extends Controller
{

    use HttpResponse;

    public function getAllVideos()
    {
        $shorts = Short::all();
        $data = [];
        foreach ($shorts as $short) {
            $data[] = [
                "id" => $short->id,
                "title" => $short->title,
                "info" => $short->info,
                "video_url" => URL::to($short->video_url),
            ];
        }
        return $this->success($data);
    }

}
