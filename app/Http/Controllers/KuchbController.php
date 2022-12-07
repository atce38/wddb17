<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuchbController extends Controller
{
    public function index()
    {
        $data="Welcome Jameel! I m from controller";
        $students=['Jameel','Hassan','Husnain'];
        return view('koib',compact('data','students'));
    }

    public function route_with_params($name,$lname)
    {
        return "Hello ".$name." ".$lname."!";
    }
}
