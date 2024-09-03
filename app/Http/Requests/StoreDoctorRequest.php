<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Change this to the appropriate authorization logic if needed
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
            'slug' => 'required|string|max:30|unique:doctors,slug,' . $this->route('doctor'),
            'image_id' => 'required|exists:media,id',
            'jd' => 'required|string|max:30',
            'email' => 'required|string|email|max:100|unique:doctors,email,' . $this->route('doctor'),
            'address' => 'nullable|string|max:100',
            'lat' => 'nullable|string|max:100',
            'long' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'facebook' => 'nullable|string|url',
            'instagram' => 'nullable|string|url',
            'linkedin' => 'nullable|string|url',
            'twitter' => 'nullable|string|url',
            'education' => 'nullable|string',
            'license' => 'nullable|string',
            'specialized' => 'nullable|string|max:100',
            'experience' => 'nullable|string',
            'languages' => 'nullable|string|max:30',
            'monday' => 'nullable|string|max:30',
            'tuesday' => 'nullable|string|max:30',
            'wednesday' => 'nullable|string|max:30',
            'thursday' => 'nullable|string|max:30',
            'friday' => 'nullable|string|max:30',
            'saturday' => 'nullable|string|max:30',
            'sunday' => 'nullable|string|max:30',
            'status' => 'boolean',
        ];
    }
}
