<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnsbbaController extends Controller
{
    //
    public function showMission()
    {
        return view('ensbba.mission');
    }
    public function showAdmin()
    {
        return view('ensbba.admin');
    }
    public function showFormation(){
        return view('ensbba.formation');
    }
}
