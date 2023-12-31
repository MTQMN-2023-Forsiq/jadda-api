<?php

namespace App\Http\Controllers\API;

use App\Helpers\PointHelper;
use App\Http\Controllers\Controller;
use App\Models\CategoryTajweed;
use App\Models\Tajweed;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TajweedController extends Controller
{

    use HttpResponse;

    public function getAllTajweed(Request $request)
    {
        $user = $request->user();
        PointHelper::add_daily_user_point($user);

        $categories = CategoryTajweed::all();
        $data = [];
        foreach ($categories as $category) {
            $tajweeds = [];
            foreach ($category->tajweeds as $tajweed) {
                $tajweeds[] = [
                    "id" => $tajweed->id,
                    "name" => $tajweed->name,
                    "description" => $tajweed->description,
                    "example_url" => URL::to($tajweed->example_url),
                    "tajweed_letter_url" => URL::to($tajweed->tajweed_letter_url),
                    "audio_url" => URL::to($tajweed->audio_url),
                ];
            }
            $data[] = [
                "id" => $category->id,
                "title" => $category->title,
                "icon" => URL::to($category->icon),
                "contents" => $tajweeds,
            ];
        }
        return $this->success($data);
    }

    public function getTajwedById($id)
    {
        $tajweed = Tajweed::find($id);
        if (!$tajweed){
            return $this->error(null,"Tajweed not found", 200);
        }
        return $this->success([
            "id" => $tajweed->id,
            "name" => $tajweed->name,
            "description" => $tajweed->description,
            "example_url" => URL::to($tajweed->example_url),
            "tajweed_letter_url" => URL::to($tajweed->tajweed_letter_url),
            "audio_url" => URL::to($tajweed->audio_url),
        ]);
    }

}
