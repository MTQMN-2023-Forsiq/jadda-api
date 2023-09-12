<?php

namespace App\Http\Controllers;

use App\Helpers\ImageFileHelper;
use App\Models\Tafsir;
use Illuminate\Http\Request;

class TafsirController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => ['required', 'mimes:png,jpg,jpeg'],
        ]);
        $validatedData['image'] = ImageFileHelper::instance()->upload($request->image, 'images');
        Tafsir::create($validatedData);
        return 'successfully created';
    }

    public function delete($id)
    {
        $tafsir = Tafsir::find($id);
        if (!$tafsir) {
            return 'data not found';
        }
        ImageFileHelper::instance()->delete($tafsir->image);
        $tafsir->delete();
        return 'successfully deleted';
    }

}
