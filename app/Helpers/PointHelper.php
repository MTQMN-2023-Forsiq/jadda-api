<?php

namespace App\Helpers;

use App\Models\Point;

class PointHelper{

    public static function add_daily_user_point($user)
    {
        //check daily point
        $point = $user->points()
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->whereDay('created_at', now()->day)
            ->first();
        if (!$point){
            Point::create([
                'value' => 100,
                'user_id' => $user->id
            ]);
        }
    }

}
