<?php

namespace App\Http\Controllers;

use App\Helpers\ImageFileHelper;
use App\Models\Short;
use Illuminate\Http\Request;

class ShortController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
           'title' => ['required', 'string'],
           'info' => ['required', 'string'],
           'video_url' => ['required', 'mimes:mp4'],
        ]);
        $validatedData['video_url'] = ImageFileHelper::instance()->upload($request->video_url, 'videos');
        Short::create($validatedData);
        return 'successfully created';
    }

    public function delete($id)
    {
        $short = Short::find($id);
        if (!$short){
            return 'data not found';
        }
        ImageFileHelper::instance()->delete($short->video_url);
        $short->delete();
        return 'successfully deleted';
    }

}
