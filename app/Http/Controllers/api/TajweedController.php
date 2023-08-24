<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CategoryTajweed;
use App\Models\Tajweed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TajweedController extends Controller
{

    public function getAllTajweed()
    {
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
        return response()->json($data, 200);
    }

    public function getTajwedById($id)
    {
        $tajweed = Tajweed::find($id);
        if (!$tajweed){
            return response()->json(["message" => "Tajweed not found"], 200);
        }
        return response()->json($tajweed, 200);
    }

}
