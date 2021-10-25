<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAula extends FormRequest
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
            'tituloAula' => 'required|min:3|max:100',
            'curso' => 'required|min:3|max:100',
            'profAula' => 'required|min:3|max:100',
            'dtAulaProf' => 'required',
            'qtdHrsAula' => 'required'
        ];
    }
}
