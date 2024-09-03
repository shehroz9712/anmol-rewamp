<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocationRequest extends FormRequest
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
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|max:30',
            'content' => 'required|string',
            'email' => 'required|string|max:30|email',
            'phone' => 'required|string|max:30',
            'mobile' => 'required|string|max:30',
            'monday' => 'nullable|string|max:30',
            'tuesday' => 'nullable|string|max:30',
            'wednesday' => 'nullable|string|max:30',
            'thursday' => 'nullable|string|max:30',
            'friday' => 'nullable|string|max:30',
            'saturday' => 'nullable|string|max:30',
            'sunday' => 'nullable|string|max:30',
            'address' => 'nullable|string',
            'lat' => 'nullable|string',
            'long' => 'nullable|string',
            'status' => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'country_id.required' => 'The country selection is required.',
            'name.required' => 'The location name is required.',
            'content.required' => 'The content is required.',
            'email.required' => 'The email is required.',
            'phone.required' => 'The phone number is required.',
            'mobile.required' => 'The mobile number is required.',
            'status.required' => 'The status is required.',
        ];
    }
}
