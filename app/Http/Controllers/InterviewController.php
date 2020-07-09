<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Http\Requests\InterviewRequest;

class InterviewController extends Controller
{
    public function index()
    {
        $interviews = Interview::all();
        
        return view("interviews/index", compact("interviews"));
    }
}
