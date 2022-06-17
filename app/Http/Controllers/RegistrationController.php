<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationModel;

class RegistrationController extends Controller
{
    //
    function onRegister(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $city = $request->input('city');
        $username = $request->input('username');
        $password = $request->input('password');
        $gander = $request->input('gander');
        $userCount = RegistrationModel::where('username', $username)->count();



        if ($userCount != 0) {
            return 'User already exists';
        }
        else {
            $result = RegistrationModel::insert([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'city' => $city,
                'username' => $username,
                'password' => $password,
                'gander' => $gander
            ]);

            if ($result == true) {
                return 'Account sucessfully  created';
            }
            else {
                return 'Failed try again later';
            }
        }

    }
}