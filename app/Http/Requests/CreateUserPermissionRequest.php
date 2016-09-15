<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserPermissionRequest extends FormRequest
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
            'start_date' => 'required',
            'end_date' => 'required',
            'reason' => 'required',
            'attachment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'start_date.required' => 'Tarehe ya kuanza ruhusa inahitajika',
            'end_date.required' => 'Tarehe ya kuisha ruhusa inahitajika'
        ];
    }
}
