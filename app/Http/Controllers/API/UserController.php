<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{

    use HttpResponse;
    public function index(Request $request)
    {
        $user = $request->user();
        $rankings = DB::table('users')
            ->join('points', 'users.id', '=', 'points.user_id')
            ->select('users.id', 'users.name', DB::raw('SUM(points.value) as total_point'))
            ->groupBy('users.id', 'users.name')
            ->orderByDesc('total_point')
            ->get();

        $rank = 0;
        foreach ($rankings as $ranking){
            $rank += 1;
            if ($ranking->id == $user->id){
                break;
            }
        }
        return $this->success([
            "name" => $user->name,
            "email" => $user->email,
            "avatar" => URL::to($user->image),
            "ranking" => $rank,
            "point" => $user->points->sum('value'),
            "task_complete" => count($user->points),
        ]);
    }

}
