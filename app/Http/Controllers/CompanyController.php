<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Auth;

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
        Auth::user()->companies()->save($company);

        return redirect()->route("interviews.index",[
            // "id" => $company->id,
        ]);
    }

    public function show(int $id)
    {
        $company = Auth::user()->companies()->get();
        $interviews = Auth::user()->interviews()->get();

        $company = $company->find($id);
        $interviews = $interviews->where('company_id', $id);

        return view("companies/show",[
            "company" => $company,
            "interviews" => $interviews,
        ]);
    }
}
