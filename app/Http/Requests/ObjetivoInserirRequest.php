<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilEditRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'objetivo_nome' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'objetivo_nome.required'=>'O campo "Qual o seu comprometimento?" é obrigatório',
            'objetivo_nome.string'=>'O valor do campo "Qual o seu comprometimento?" é inválido',

        ];
    }
}
