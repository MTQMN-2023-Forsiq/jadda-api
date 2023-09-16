<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sholat;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SholatController extends Controller
{

    use HttpResponse;
    public function getAllSholat()
    {
        $sholats = Sholat::all();
        $data = [];
        foreach ($sholats as $sholat){
            $data[] = [
                "id" => $sholat->id,
                "title" => $sholat->title,
                "image_url" => URL::to($sholat->image_url),
                "description" => $sholat->description,
                "movement_angle" => [
                    "left_wrist" => $sholat->left_wrist,
                    "left_elbow" => $sholat->left_elbow,
                    "left_shoulder" => $sholat->left_shoulder,
                    "left_hip" => $sholat->left_hip,
                    "left_knee" => $sholat->left_knee,
                    "left_ankle" => $sholat->left_ankle,
                    "right_wrist" => $sholat->right_wrist,
                    "right_elbow" => $sholat->right_elbow,
                    "right_shoulder" => $sholat->right_shoulder,
                    "right_hip" => $sholat->right_hip,
                    "right_knee" => $sholat->right_knee,
                    "right_ankle" => $sholat->right_ankle,
                ],
            ];
        }
        return $this->success($data);
    }

}
