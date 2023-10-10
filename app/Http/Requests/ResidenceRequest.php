<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResidenceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @@return array<string, mixed>
     */
    public function rules()
    {
        $validation =
        [
            'residence_name' => ['required'],
            'residence_desc' => ['required'],
            'address' => ['required'],
            'address_url' => ['nullable', 'url'],
            'specification' => ['required'],
            'image_1' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000', 'nullable'],
            'image_2' => [ 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000', 'nullable'],
            'video' => [  'mimes:mp4,mov,ogg', 'nullable'],
            'residence_status' => ['required'],
        ];

        if ($this->isMethod('post')) {
            $validation['featured_image'] = ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
        }

        if (!$this->isMethod('post')) {
            $validation['featured_image'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2000'];
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
            'residence_name.required' => 'nama perumahan tidak boleh kosong',
            'residence_desc.required' => 'deskripsi tidak boleh kosong',
            'address.required' => 'alamat tidak boleh kosong',
            'address_url.url' => 'link alamat harus berupa url',
            'specification.required' => 'spesifikasi tidak boleh kosong',
            'featured_image.required' => 'gambar terkait tidak boleh kosong',
            'featured_image.max' => 'ukuran gambar harus dibawah 2mb',
            'image_1.max' => 'ukuran gambar harus dibawah 2mb',
            'image_2.max' => 'ukuran gambar harus dibawah 2mb',
            'featured_image.mimes' => 'tipe gambar yang diperbolehkan jpeg,png,jpg,gif,svg',
            'image_1.mimes' => 'tipe gambar yang diperbolehkan jpeg,png,jpg,gif,svg',
            'image_2.mimes' => 'tipe gambar harus berupa .jpeg/.png/.jpg/.gif/.svg',
            'video.mimes' => 'tipe video harus berupa .mp4/.mov/.ogg',
        ];
    }
}
