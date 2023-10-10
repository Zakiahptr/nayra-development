<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'client_name' => ['required'],
            'client_job' => ['required'],
            'testimoni' => ['required'],
        ];

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
            'client_name.required' => 'nama klien tidak boleh kosong',
            'client_job.required' => 'pekerjaan klien tidak boleh kosong',
            'testimoni.required' => 'testimoni tidak boleh kosong',
        ];
    }
}
