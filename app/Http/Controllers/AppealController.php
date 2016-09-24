<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AppealController extends Controller
{
    public function index()
    {
        return view('appeals.index');
    }

    public function create()
    {
        return view('appeals.create');
    }    
}
