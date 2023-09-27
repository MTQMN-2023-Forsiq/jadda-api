<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\HttpResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{

    use HttpResponse;

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        if (!Auth::attempt($validatedData)) {
            return $this->error('', 'User tidak ditemukan', 200);
        }
        $user = User::where('email', $validatedData['email'])->first();
        $data = [
            "name" => $user->name,
            "email" => $user->email,
            "avatar" => URL::to($user->image),
        ];
        return $this->success([
            'user' => $data,
            'token' => $user->createToken('Token of ' . $user->username)->plainTextToken,
        ]);
    }

    public function register(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return $this->error('', 'Email sudah terdaftar', 200);
        }
        try {
            $validatedData = $request->validate([
                'name' => ['required'],
                'email' => ['required', 'email:dns'],
                'password' => ['required', 'min:6'],
            ]);
            $validatedData['password'] = Hash::make($validatedData['password']);
            $validatedData['image'] = 'assets/avatar/' . rand(1, 5) . '.png';
            User::create($validatedData);
            return $this->success(null, "Registrasi berhasil");
        } catch (\Exception $e) {
            return $this->success(null, "Pastikan isi data dengan benar");
        }
    }

}
