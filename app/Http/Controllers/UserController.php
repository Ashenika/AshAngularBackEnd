<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        $user = new users([
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'usertype' => $request->get('usertype')

        ]);
        $user->save();
        return response()->json('Successfully Logged in');
    }
}
