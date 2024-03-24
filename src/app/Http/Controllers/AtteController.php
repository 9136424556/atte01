<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AtteController extends Controller
{
    public function index()
    {
       return view('index');
    }

    public function login(Request $request)
    {
       return view('login');
    }
    public function register(Request $request)
    {
      return view('register');
    }
    public function attendance(Request $request)
    {
     
      return view('attendance');
    }
}

