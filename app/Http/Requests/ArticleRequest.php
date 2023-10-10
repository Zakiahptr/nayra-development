<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'article_title' => ['required'],
            'content' => ['required'],
        ];

        if ($this->isMethod('post')) {
            $validation['thumbnail'] = ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
        }

        if (!$this->isMethod('post')) {
            $validation['thumbnail'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
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
            'article_title.required' => 'judul artikel tidak boleh kosong',
            'content.required' => 'isi konten tidak boleh kosong',
            'thumbnail.required' => 'gambar artikel tidak boleh kosong',
            'thumbnail.max' => 'ukuran gambar harus dibawah 2mb',
        ];
    }
}
