<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class verifyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'phone' => 'required|numeric|min:10',
            'login_code' => 'required|numeric|between:111111,999999'
        ];
    }
}
