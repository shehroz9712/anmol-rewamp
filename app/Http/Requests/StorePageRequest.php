<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
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
            // 'page_title' => 'required|string|max:255',
            // 'name' => 'required|string|max:30',
            // 'slug' => 'required|string|max:30',
            // 'heading' => 'required|string|max:30',
            // 'content' => 'nullable|string',
            // 'image' => 'nullable|integer',
            // 'heading_2' => 'nullable|string|max:30',
            // 'content_2' => 'nullable|string',
            // 'image_2' => 'nullable|integer',
            // 'heading_3' => 'nullable|string|max:30',
            // 'content_3' => 'nullable|string',
            // 'image_3' => 'nullable|integer',
            // 'meta_title' => 'nullable|string',
            // 'meta_desc' => 'nullable|string',
            // 'meta_keyword' => 'nullable|string',
            // 'footer_scripts' => 'nullable|string',
            // 'header_scripts' => 'nullable|string',
            // 'body_scripts' => 'nullable|string',
            // 'status' => 'boolean',
        ];

    }
}
