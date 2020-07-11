<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Company;
use App\Http\Requests\InterviewRequest;

class InterviewController extends Controller
{
    public function index()
    {
        $interviews = Interview::all();
        $companies = Company::all();
        
        return view("interviews/index", [
            "interviews" => $interviews,
            "companies" => $companies,
        ]);
    }

    public function showCreateForm(int $id)
    {
        return view("interviews/create",[
            "company_id" => $id
        ]);
    }

    public function create(int $id, InterviewRequest $request)
    {
        $selected_company = Company::find($id);

        $interview = new Interview();
        $interview->schedule = $request->schedule;
        $interview->interview_note = $request->interview_note;

        $selected_company->interviews()->save($interview);

        return redirect()->route("interviews.index");
    }

    public function showEditForm(int $id, int $interview_id)
    {
        $interview = Interview::find($interview_id);

        return view('interviews/edit', [
            'interview' => $interview,
        ]);
    }
}
