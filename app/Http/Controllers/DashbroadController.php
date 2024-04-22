<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbroadController extends Controller
{
    //This method will show dashbroad page for customer
    public function index()
    {
        return view('dashbroad');
    }
}
