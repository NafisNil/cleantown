<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CleanerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name_bn' => 'required',
            'father_name' => 'required',
            'address' => 'required',
            'ward_no' => 'required',
            'holding_no' => 'required',
            'phone' => 'required',
            'nid' => 'required',
           
        ];
    }
}
