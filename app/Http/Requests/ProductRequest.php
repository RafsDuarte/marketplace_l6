<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'body' => ['required', 'min:30'],
            'price' => ['required', 'regex:#^\d+(\.\d{2})?$#'],
            'categories' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Esse campo é obrigatório!',
            'description' => 'O campo deve ter no mínimo 10 caracteres!',
            'body' => 'O campo deve ter no mínimo 30 caracteres!',
            'price' => 'O campo dever ter um ponto separando as casas decimais!',
            'categories' => 'O campo deve estar com pelo menos uma categoria selecionada!'
        ];
    }
}
