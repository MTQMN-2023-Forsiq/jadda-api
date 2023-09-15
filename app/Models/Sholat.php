<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sholat extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_url',
        'description',
        'left_wrist',
        'left_elbow',
        'left_shoulder',
        'left_hip',
        'left_knee',
        'left_ankle',
        'right_wrist',
        'right_elbow',
        'right_shoulder',
        'right_hip',
        'right_knee',
        'right_ankle',
    ];
}
