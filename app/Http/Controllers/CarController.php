<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $myVar = "My Value";
        $cars=['BMW','Honda','Benz'];
        return view('welcome', compact('myVar','cars'));
    }
}
