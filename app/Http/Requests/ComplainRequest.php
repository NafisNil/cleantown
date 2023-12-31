<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComplainRequest extends FormRequest
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
            'volunteer_id' => 'required',
            'date' => 'required',
            'landlord_id' => 'required',
            'logo' => 'mimes:jpg,svg,png,jpeg,webp'
        ];
    }
}
