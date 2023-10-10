<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            $validation['image'] = ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
        }

        if (!$this->isMethod('post')) {
            $validation['image'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
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
            'image.required' => 'gambar tidak boleh kosong',
            'image.max' => 'ukuran gambar harus dibawah 2mb',
        ];
    }
}
