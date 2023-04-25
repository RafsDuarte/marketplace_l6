<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'description' => ['required', 'min:10'],
            'phone' => ['required', 'regex:#^\(?(0?[1-9][1-9])\)?[-. ]?(\d{4})[-. ]?(\d{4})$#'],
            'mobile_phone' => ['required', 'regex:#^\(?(0?[1-9][1-9])\)?[-. ]?([9][6-9]\d{3})[-. ]?(\d{4})$#']
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Esse campo é obrigatório!',
            'description' => 'O campo deve ter no mínimo 10 caracteres',
            'phone' => 'O campo deve conter um telefone com DDD válido!',
            'mobile_phone' => 'O campo deve conter um celular com DDD válido!'
        ];
    }
}
