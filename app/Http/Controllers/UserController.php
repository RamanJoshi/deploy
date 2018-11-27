<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    public function getAllUser(){
    	$data = User::all();
    	return $data;
    }
}
