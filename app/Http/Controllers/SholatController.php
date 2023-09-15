<?php

namespace App\Http\Controllers;

use App\Helpers\ImageFileHelper;
use App\Models\Sholat;
use Illuminate\Http\Request;

class SholatController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required'],
            'image_url' => ['required'],
            'description' => ['required'],
            'left_wrist' => ['numeric'],
            'left_elbow' => ['numeric'],
            'left_shoulder' => ['numeric'],
            'left_hip' => ['numeric'],
            'left_knee' => ['numeric'],
            'left_ankle' => ['numeric'],
            'right_wrist' => ['numeric'],
            'right_elbow' => ['numeric'],
            'right_shoulder' => ['numeric'],
            'right_hip' => ['numeric'],
            'right_knee' => ['numeric'],
            'right_ankle' => ['numeric'],
        ]);
        $validatedData['image_url'] = ImageFileHelper::instance()->upload($request->image_url, 'images');
        Sholat::create($validatedData);
        return 'successfully created';
    }

    public function delete($id)
    {
        $sholat = Sholat::find($id);
        if (!$sholat){
            return 'Data not found';
        }
        ImageFileHelper::instance()->delete($sholat->image_url);
        $sholat->delete();
        return 'successfully deleted';
    }

}
