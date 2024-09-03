<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactServiceRequest extends FormRequest
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
            'name' => 'required|string|max:30',
            'email' => 'required|string|email|max:40|unique:contact_us',
            'phone' => 'required|string|max:30',
            'message' => 'required|string',
        ];
    }
}
