<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RegistrationModel;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class LoginController extends Controller
{
    function onLogin(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $userCount = RegistrationModel::where(['username' => $username, 'password' => $password])->count();
        if ($userCount == 1) {
            $key = env('TOKEN_KEY');
            $payload = [
                'site' => 'http://demo.com',
                'user' => $username,
                'iat' => time(),
                'nbf' => time() + 3600
            ];
            $jwt = JWT::encode($payload, $key, 'HS256');
            return response()->json(['status' => 'login sucessfully', 'token' => $jwt, 'username' => $username]);
        }
        else {
            return "password or username is invalid";
        }

    // if ($userCount != 0) {

    // }
    // else {
    //     return 'User Not found';
    // }

    }
}