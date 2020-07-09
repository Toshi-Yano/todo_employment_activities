<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view("companies/index", compact("companies"));
    }
}
