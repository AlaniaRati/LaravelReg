<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function customLogin(Request $request){
        return $request -> all();
    }
    public function customRegister(Request $request){

        $request->validate([
            'name' => ['required', 'string','min: 7, max: 20'],
            'email' => ['required', 'email', 'max: 50'],
            'password' => ['required', 'min: 7', 'max: 20', 'confirmed'],

        ]);
    }
}
