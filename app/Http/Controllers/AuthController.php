<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {

        $fields = $request->validate([
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'username' => $fields['username'],
            'password' => bcrypt($fields['password'])
        ]);

        return response($user, 201);
    }

    public function login(Request $request) {

        $fields = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        // Get user from db
        $user = User::where('username', $fields['username'])->first();

        // Check pass
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'The given data was invalid',
                'errors' => [
                    'username' => 'The username is incorrect',
                    'password' => 'The password is incorrect'
                ]
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 200);
    }
}
