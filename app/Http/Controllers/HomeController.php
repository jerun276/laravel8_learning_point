<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name=null)
    {
        echo 'Hi this is home controller. And Name is : '.$name;
    }
}
