<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProfessor extends FormRequest
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
        return
        [
            'nomeProf' => 'required|min:3|max:100',
            'emailProf' => 'required|min:3|max:100',
            'telefoneProf' => 'required|min:3|max:30',
            'nRegistro' => 'required|min:3|max:10',
            'titulacao' => 'required',
            'salario' => 'required|min:1|max:15',
            'valorHrAulaProf' => 'required|min:1|max:10'
        ];
    }
}
