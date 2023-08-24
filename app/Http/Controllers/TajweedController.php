<?php

namespace App\Http\Controllers;

use App\Helpers\ImageFileHelper;
use App\Models\Tajweed;
use Illuminate\Http\Request;

class TajweedController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => ["required", "string"],
            "description" => ["required", "string"],
            "example_url" => ["required", "mimes:png,jpg,jpeg","max:1000"],
            "tajweed_letter_url" => ["required", "mimes:png,jpg,jpeg","max:1000"],
            "audio_url" => ["required"],
            "category_tajweed_id" => ["required"],
        ]);
        $validatedData["example_url"] = ImageFileHelper::instance()->upload($request->example_url,'images');
        $validatedData["tajweed_letter_url"] = ImageFileHelper::instance()->upload($request->tajweed_letter_url,'images');
        $validatedData["audio_url"] = ImageFileHelper::instance()->upload($request->audio_url,'audios');
        Tajweed::create($validatedData);
        return 'created successfully';
    }

    public function delete($id)
    {
        $tajweed = Tajweed::findOrFail($id);
        ImageFileHelper::instance()->delete($tajweed->example_url);
        ImageFileHelper::instance()->delete($tajweed->tajweed_letter_url);
        ImageFileHelper::instance()->delete($tajweed->audio_url);
        $tajweed->delete();
        return 'deleted successfully';
    }

}
