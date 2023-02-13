<?php

namespace App\Http\Requests\V1;


use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;


class IranProvinceRequest extends FormRequest
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
            'province' => ['required',Rule::unique('provinces')]
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->apiResult(__('validation error'),
            ['errors' => $validator->errors()], false, 422
        ));
    }
}
