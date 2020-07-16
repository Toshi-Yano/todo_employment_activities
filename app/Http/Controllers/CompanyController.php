<?php

namespace App\Http\Controllers;

use App\Company;
use App\Route;
use Config;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function showCreateForm()
    {
        $routes = Route::all();

        return view("companies/create",[
            "routes" => $routes,
        ]);
    }

    public function create(CompanyRequest $request)
    {
        $company = new Company();
        $company->company_name = $request->company_name;
        $company->company_note = $request->company_note;
        $company->route_id = $request->route_id;
        $company->situation_id = 1; // => 選考中
        Auth::user()->companies()->save($company);

        return redirect()->route("interviews.index");
    }

    public function showEditForm(int $id)
    {
        $company = Company::find($id);
        $routes = Route::all();
        $past_route_id = $company->route_id;
        $situations = Config::get('situations');
        $past_situation_id = $company->situation_id;

        return view("companies/edit", [
            "company" => $company,
            "routes" => $routes,
            "past_route_id" => $past_route_id,
            "situations" => $situations,
            "past_situation_id" => $past_situation_id,
        ]);
    }

    public function edit(int $id, CompanyRequest $request)
    {
        $company = Company::find($id);

        $company->company_name = $request->company_name;
        $company->company_note = $request->company_note;
        $company->route_id = $request->route_id;
        $company->situation_id = $request->situation_id;
        $company->save();

        return redirect()->route("interviews.index");
    }

    public function show(int $id)
    {
        $company = Auth::user()->companies()->get();
        $interviews = Auth::user()->interviews()->orderby('schedule', 'asc')->get();

        $company = $company->find($id);
        $interviews = $interviews->where('company_id', $id);

        return view("companies/show",[
            "company" => $company,
            "interviews" => $interviews,
        ]);
    }

    public function destroy(int $id)
    {
        Company::find($id)->delete();
        
        return redirect()->route("interviews.index");
    }
}
