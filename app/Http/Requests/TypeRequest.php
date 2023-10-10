<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeRequest extends FormRequest
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
            'residence_id' => ['required'],
            'type_name' => ['required'],
            'price' => ['required', 'numeric'],
            'price_month' => ['nullable', 'numeric'],
            'land_area' => ['required', 'numeric'],
            'building_area' => ['required', 'numeric'],
            'bedroom' => ['required', 'numeric'],
            'bathroom' => ['required', 'numeric'],
            'floor' => ['required', 'numeric'],
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
            'residence_id.required' => 'perumahan harus dipilih',
            'type_name.required' => 'tipe perumahan tidak boleh kosong',
            'price.required' => 'harga tidak boleh kosong',
            'price.numeric' => 'harga harus berupa angka',
            // 'price_month.required' => 'harga cicilan perbulan tidak boleh kosong',
            'price_month.numeric' => 'harga harus berupa angka',
            'land_area.required' => 'LT tidak boleh kosong',
            'building_area.required' => 'LB tidak boleh kosong',
            'bedroom.required' => 'kamar tidur tidak boleh kosong',
            'bathroom.required' => 'kamar mandi tidak boleh kosong',
            'floor.required' => 'Lantai tidak boleh kosong',
        ];
    }
}
