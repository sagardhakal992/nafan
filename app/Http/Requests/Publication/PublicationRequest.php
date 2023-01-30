<?php

namespace App\Http\Requests\Publication;

use App\Helper\ResponseJson;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PublicationRequest extends FormRequest
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
            "name"=>"required|string",
            "description"=>"string",
            "file"=>"required|file|max:10240"
        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator )
    {
        throw new HttpResponseException(ResponseJson::fail($validator->errors()->toArray()));
    }
}
