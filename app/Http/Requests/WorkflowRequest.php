<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkflowRequest extends FormRequest
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
            'flow_title' => ['required'],
            'flow_desc' => ['required'],
        ];

        if ($this->isMethod('post')) {
            $validation['flow_icon'] = ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
        }

        if (!$this->isMethod('post')) {
            $validation['flow_icon'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
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
            'flow_title.required' => 'alur kerja tidak boleh kosong',
            'flow_desc.required' => 'deskripsi alur kerja tidak boleh kosong',
            'flow_icon.required' => 'ikon alur kerja tidak boleh kosong',
            'flow_icon.max' => 'ukuran ikon harus dibawah 2mb',
        ];
    }
}
