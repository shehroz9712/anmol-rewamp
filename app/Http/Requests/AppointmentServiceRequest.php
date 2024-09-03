<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentServiceRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:appointments',
            'location' => 'nullable|string|max:100',
            'date' => 'required|date',
            'time' => 'nullable|date_format:H:i:s',
            'treatment' => 'required|string|max:100',
            'doctor_id' => 'nullable|exists:doctors,id',
            'source' => 'nullable|string|max:100',
            'medium' => 'nullable|string|max:100',
            'term' => 'nullable|string|max:100',
            'campaign' => 'nullable|string|max:100',
        ];
    }
}
