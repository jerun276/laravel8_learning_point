<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $name = 'Learning Point';
        $teacher = array(
            'name' => 'John',
            'email' => 'john@gmail.com'
        );
        return view('teacher', compact('name','teacher'));
    }
}
