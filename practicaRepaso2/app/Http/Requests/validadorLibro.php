<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibro extends FormRequest
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
            'isbn'=>'required | numeric | min_digits:13',
            'titulo'=>'required | max:150',
            'autor'=>'required',
            'paginas'=>'required | numeric | min:1 | integer',
            'año'=>'required | numeric | min_digits:4| max_digits:4 |between:1000,2024',
            'editorial'=>'required',
            'email-editorial'=>'required |email:rfc,dns',

        ];
    }
}
