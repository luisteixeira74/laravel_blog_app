<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use App\Interfaces\UserInterface;
use Illuminate\Support\Facades\Hash;

class UserService implements UserInterface
{
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->userPass);
        $user->email = $request->email;
        $user->save();

        return response('User add with success', 200, []);
    }

}



