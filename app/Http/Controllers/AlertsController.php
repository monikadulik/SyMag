<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertsController extends Controller
{
    public function show(){
        return view('alerts.showAlerts');
    }

    public function new(){
        return view('alerts.newAlert');
    }
}
