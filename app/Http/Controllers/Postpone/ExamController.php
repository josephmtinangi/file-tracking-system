<?php

namespace App\Http\Controllers\Postpone;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function index()
    {
        return view('postpone.exams.index');


    }
    public function create()
    {
        return view('postpone.exams.create');
    }


    public function store()
    {
       return 'form data here';
    }
}
