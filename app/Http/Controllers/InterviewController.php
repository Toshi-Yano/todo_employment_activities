<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Company;
use App\Stage;
use Config;
use App\Http\Requests\InterviewRequest;
use Illuminate\Support\Facades\Auth;

class InterviewController extends Controller
{
    public function index()
    {
        $interviews = Auth::user()->interviews()->recentInterview()->paginate(5);
        $companies = Auth::user()->companies()->get();
        $situations = Config::get('situations');

        return view("interviews/index", compact(
            'interviews',
            'companies',
            'situations'
        ));
    }

    public function showCreateForm(int $id)
    {
        $stages = Stage::all();

        return view("interviews/create", [
            "company_id" => $id,
            "stages" => $stages,
        ]);
    }

    public function create(int $id, InterviewRequest $request)
    {
        $selected_company = Company::find($id);

        $interview = new Interview();
        $interview->stage_id = $request->stage_id;
        $interview->schedule = $request->schedule;
        $interview->interview_note = $request->interview_note;
        $interview->company_id = $selected_company->id;
        Auth::user()->interviews()->save($interview);

        return redirect()->route('companies.show', compact('id'));
    }

    public function showEditForm(int $id, int $interview_id)
    {
        $interview = Interview::find($interview_id);
        $past_stage_id = $interview->stage_id;
        $stages = Stage::all();

        return view('interviews/edit', compact(
            'interview',
            'past_stage_id',
            'stages'
        ));
    }

    public function edit(int $id, int $interview_id, InterviewRequest $request)
    {
        $interview = Interview::find($interview_id);

        $interview->stage_id = $request->stage_id;
        $interview->schedule = $request->schedule;
        $interview->interview_note = $request->interview_note;
        $interview->save();

        return redirect()->route('companies.show', compact('id'));
    }
}
