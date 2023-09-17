<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRequest extends FormRequest
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
            'holding_no' => 'required',
            'flat_no' => 'required',
            'dob' => 'required',
            'nid' => 'required',
            'name_bn' => 'required',
            'father_name' => 'required',
            'ward_no' => 'required',
            'mobile_no' => 'required|numeric',
            'address' => 'required',
            'education' => 'required',
           
        ];
    }
}
