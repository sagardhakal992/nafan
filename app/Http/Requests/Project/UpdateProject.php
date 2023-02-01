<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProject extends FormRequest
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
            "start_at"=>"required|integer",
            "title"=>"required|string",
            "description"=>"required|string",
            "donor"=>"required|string",
            "end_date"=>"integer",
            "location"=>"required|string"
        ];
    }
}
