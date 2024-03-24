<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worktime;

class AttendanceController extends Controller
{
    public function attendance()
    {
        $attendances = 'name' =>'鈴木'
                       'begin'=>'10:00:00'
       
        return view('attendance');
    }
}
