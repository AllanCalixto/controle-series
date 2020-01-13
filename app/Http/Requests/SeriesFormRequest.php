<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            'nome' => 'required|min:3|max:20'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório !',
            'min'      => 'Em :attribute digite pelo menos 3 caracteres!',
            'max'      => 'Em :attribute só permite até 20 caracteres!',
            'unique'  => ':attribute já está cadastrado!'
        ];
    }
}
