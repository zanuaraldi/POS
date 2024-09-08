<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile($id, $name){
        return view('user', compact('id', 'name'));
    }
}
