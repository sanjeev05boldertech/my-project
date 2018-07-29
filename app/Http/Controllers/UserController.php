<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
    public function store(request $request)
    {
     
	  $name = $request->input('name');
	  $email = $request->input('email');
	  $password = $request->input('password');
	 DB::table('users')->insert([
	 'email' => $email,
	 'password' => $password,
	 'name' => $name 
	 ]);
    }
}
