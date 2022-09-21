<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function entrepriseDashboard (){
        return view('entreprisedashboard');
    }

    public function prestataireDashboard (){
        return view('prestatairedashboard');
    }
}
