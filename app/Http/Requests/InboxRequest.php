<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InboxRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        $validation =
        [
            'sender_name' => ['required'],
            'email' => ['required', 'email:rfc,dns'],
            'phone' => ['required', 'numeric'],
            'subject' => ['required'],
            'message' => ['required'],
        ];

        return $validation;
    }
    public function messages()
    {
        return [
            'sender_name.required' => 'nama tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
            'email.email' => 'email tidak valid',
            'phone.required' => 'no. whatsapp tidak boleh kosong',
            'phone.numeric' => 'noomor tidak valid',
            'subject.required' => 'subjek tidak boleh kosong',
            'message.required' => 'isi pesan tidak boleh kosong',
        ];
    }
}
