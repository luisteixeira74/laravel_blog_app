<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request, User $user)
    {
        //TO-DO: validar a request acima

        $userRequest = $request->only('name', 'email', 'password');
        $userRequest['password'] = bcrypt($userRequest['password']);

        if(!$user = $user->create($userRequest))
            abort(500, 'Error to create a new user');

        return response()->json([
            'data' => [
                'user' => $user
            ]
        ]);
    }
}
