<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',//|regex:/^\d*(\.\d{1,2})?$/',
            'category_ids' => 'required',
            'bodywork_ids' => 'required',
            'engine_ids' => 'required',
            'car_ids' => 'required',
        ];
    }
}
