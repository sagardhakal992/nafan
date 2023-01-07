<?php

namespace App\Http\Requests\Member;

use App\Helper\ResponseJson;
use Dotenv\Exception\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class MemberRegisterRequest extends FormRequest
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
            "email"=>"required|email|unique:users",
            "name"=>"required|string",
            "password"=>"required|string",
            "age"=>"required|integer",
            "phone_number"=>"required|numeric|min:10",
            "fk_role_id"=>"required|integer"
        ];
    }

    public function failedValidation(Validator $validator)
{
   throw new HttpResponseException(response()->json([
     'success'   => false,
     'message'   => 'Validation errors',
     'data'      => $validator->errors()
   ]));
}
}
