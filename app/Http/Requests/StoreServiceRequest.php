<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'slug' => 'required|string|max:100',
            'image_id' => 'required|exists:media,id',
            'icon' => 'required|exists:media,id',
            'header_image' => 'required|exists:media,id',
            'content' => 'required|string',
            'short_desc' => 'required|string',
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name may not be greater than 100 characters.',
            'image_id.required' => 'Please select a media.',
            'image_id.exists' => 'The selected media is invalid.',
            'content.required' => 'Content is required.',
            'status.required' => 'Status is required.',
            'status.boolean' => 'Status must be true or false.',
        ];
    }
}
