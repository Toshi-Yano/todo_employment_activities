<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InterviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "stage_id" => "required",
            'schedule' => "required",
            "interview_note" => "required|max:1000",
        ];
    }

    public function attributes()
    {
        return [
            "stage_id" => "選考ステップ",
            'schedule' => "面接日時",
            "interview_note" => "メモ",
        ];
    }
}
