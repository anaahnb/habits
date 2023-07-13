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
            'nome' => ['required', 'string'],
            'email' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'O campo Nome é obrigatório',
            'nome.string'=>'O valor do campo Nome é inválido',

            'email.required'=>'O campo Endereço de e-mail é obrigatório.',
            'email.string'=>'O campo Endereço de e-mail é inválido.',
        ];
    }
}
