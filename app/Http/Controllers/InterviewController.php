<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Company;
use App\Http\Requests\InterviewRequest;
use Illuminate\Support\Facades\Auth;

class InterviewController extends Controller
{
    public function index()
    {
        $interviews = Interview::all();
        $companies = Auth::user()->companies()->get();
        
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
        $interview->stage_id = $request->stage_id;
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

    public function edit(int $id, int $interview_id, InterviewRequest $request)
    {
        $interview = Interview::find($interview_id);

        $interview->stage_id = $request->stage_id;
        $interview->schedule = $request->schedule;
        $interview->interview_note = $request->interview_note;
        $interview->save();

        return redirect()->route("interviews.index");
    }
}
