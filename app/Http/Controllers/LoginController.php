<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RegistrationModel;

class LoginController extends Controller
{
    function onLogin(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $userCount = RegistrationModel::where(['username' => $username, 'password' => $password])->count();
        return $userCount;

    // if ($userCount != 0) {

    // }
    // else {
    //     return 'User Not found';
    // }

    }
}