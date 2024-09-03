<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title' => 'required|string|max:30',
            'slug' => 'required|string|max:30|unique:blogs,slug,' . $this->route('blog'),
            'content' => 'required|string',
            'image_id' => 'required|integer',
            'doctor_id' => 'required|exists:doctors,id',
            'status' => 'boolean',
        ];
    }
}
