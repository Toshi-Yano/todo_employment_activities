<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            "company_name" => "required|max:100",
            "company_note" => "required|max:1000",
            "route_id" => "required",
        ];
    }

    public function attributes()
    {
        return [
            "company_name" => "会社名",
            "company_note" => "メモ",
            "route_id" => "応募元",
        ];
    }
}
