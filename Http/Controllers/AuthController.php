<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        // $user = User::first();
        $validatedData = $request->validate ([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);


        $user = User::where('email', $validatedData['email'])->first();

        if ($user && Hash::check($validatedData['password'], $user->password)) {
            $token = $user->createToken('api', ['create']);
            return [
                'token' => $token->plainTextToken
            ];

        } else {
            return [
                'error' => 'Invalid Credentials'
            ];
        }


        }
}
