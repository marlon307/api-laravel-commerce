<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class UserController extends Controller
{
    public function __invoke()
    {
        // ...
    }

    public function createUser(Request $request)
    {
        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $authUser = new AuthController;
        return $authUser->login();
    }
}
