<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        $validation =
        [
            'service_title' => ['required'],
            'service_desc' => ['required'],
        ];

        if ($this->isMethod('post')) {
            $validation['service_icon'] = ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
        }

        if (!$this->isMethod('post')) {
            $validation['service_icon'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
        }
        return $validation;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'service_title.required' => 'keunggulan tidak boleh kosong',
            'service_desc.required' => 'deskripsi keunggulan tidak boleh kosong',
            'service_icon.required' => 'ikon keunggulan tidak boleh kosong',
            'service_icon.max' => 'ukuran ikon harus dibawah 2mb',
        ];
    }
}
