<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestPostRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:guests,email',
            'x-value' => 'required|numeric|min:1|max:33',
            'y-value' => 'required|numeric|min:1|max:23',
            'z-value' => 'required|numeric|min:1|max:18',
            'w-value' => 'required|numeric|min:1|max:13',
        ];
    }
}
