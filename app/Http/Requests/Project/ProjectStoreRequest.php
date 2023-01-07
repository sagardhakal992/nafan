<?php

namespace App\Http\Requests\Project;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProjectStoreRequest extends FormRequest
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
            "start_date"=>"integer|required",
            "end_date"=>"required|integer",
            "location"=>"required|string",
            "donor"=>"string",
            "title"=>"required|string",
            "short_description"=>"required|string",
            "description"=>"required|string",
            "is_completed"=>"required|boolean"
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        throw new HttpResponseException(response()->json([
            "status"=>403,
            "message"=>"Validation Errors",
            "data"=>$errors
        ]));
    }
}
