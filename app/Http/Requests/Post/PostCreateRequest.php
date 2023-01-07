<?php

namespace App\Http\Requests\Post;

use App\Helper\ResponseJson;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PostCreateRequest extends FormRequest
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
            "title"=>"required|string",
            "short_description"=>"required|string",
            "description"=>"required|string",
            "is_public"=>"required|boolean"
        ];
    }
    public function failedValidation(Validator $validator){
        $errors=$validator->errors();
        throw new  HttpResponseException(ResponseJson::fail($errors->toArray(),"validation error",404));
    }
}
