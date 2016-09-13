<?php

namespace App\Http\Controllers\Postpone;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudyController extends Controller
{
    public function index()
    {
        return view('postpone.studies.index');
    }
}
