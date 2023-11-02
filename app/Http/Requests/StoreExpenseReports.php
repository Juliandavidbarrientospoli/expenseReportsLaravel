<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpenseReports extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'min:3',
                'regex:/^[A-Za-z0-9\s]+$/', // Permite letras, números y espacios en blanco
            ],
        ];
    }

    /**
* Get the error messages for the defined validation rules.
*
* @return array
*/
public function messages()
{
    return [
        'title.required' => 'A title is required',
        'title.regex'  => 'The format is invalid',
    ];
}

}


