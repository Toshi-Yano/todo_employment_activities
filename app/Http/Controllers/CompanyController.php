<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function showCreateForm()
    {
        return view("companies/create");
    }

    public function create(CompanyRequest $request)
    {
        $company = new Company();
        $company->company_name = $request->company_name;
        $company->company_note = $request->company_note;
        $company->route_id = $request->route_id;
        $company->save();

        return redirect()->route("interviews.index",[
            // "id" => $company->id,
        ]);
    }
}
