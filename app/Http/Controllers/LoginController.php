<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RegistrationModel;

class LoginController extends Controller
{
    function onRegister(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $userCount = RegistrationModel::where('username', $username)->count();



        if ($userCount != 0) {

        }
        else {
            return 'User Not found';
        }

    }
}