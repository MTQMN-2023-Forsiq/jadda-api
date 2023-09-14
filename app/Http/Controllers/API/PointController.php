<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Point;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointController extends Controller
{

    use HttpResponse;

    public function store(Request $request)
    {
        $user = $request->user();
        if (!$request->value){
            return $this->error(null, "Terjadi kesalahan", 200);
        }
        Point::create([
            'value' => $request->value,
            'user_id' => $user->id,
        ]);
        return $this->success(null,"Point berhasil ditambahkan");
    }

    public function leaderboard()
    {
        $rankings = DB::table('users')
            ->join('points', 'users.id', '=', 'points.user_id')
            ->select('users.id', 'users.name', DB::raw('SUM(points.value) as total_point'))
            ->groupBy('users.id', 'users.name')
            ->orderByDesc('total_point')
            ->limit(10)
            ->get();

        $data = [];
        $rank = 1;
        foreach ($rankings as $ranking) {
            $data[] = [
                "rangking" => $rank++,
                "user_id" => $ranking->id,
                "name" => $ranking->name,
                "point" => $ranking->total_point,
            ];
        }
        return $this->success($data);
    }

}
