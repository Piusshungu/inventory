<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return view('users/login');
    }


    public function UserLogin(){

    }

    
    public function UserRegistration(){
        return view('users/register');

    }

    public function CreateUser(){
        $this->validate(request(), [
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'password' => 'required',
            'password_confirm' => 'required'
        ]);
    }
}
