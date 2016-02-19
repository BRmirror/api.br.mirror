<?php

namespace App\Http\Controllers;

use App\User;

class JurandirController extends Controller
{

    public function __construct()
    {

    }

    public function exe()
    {
        $usuarios = User::all();
        return view('joao' , compact('usuarios'));
    }

    public function show($userid)
    {
        $user = User::find($userid);
        return $user;
    }

}