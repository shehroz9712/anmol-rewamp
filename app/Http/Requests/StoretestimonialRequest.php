<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoretestimonialRequest extends FormRequest
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
            'country_id' => 'required|exists:countries,id',
            'image_id' => 'required|integer',
            'star' => 'required|integer|between:1,5',
            'content' => 'required|string',
            'status' => 'boolean',
        ];
    }
}
