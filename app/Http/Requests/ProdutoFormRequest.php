<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormRequest extends FormRequest
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
            //
            'nome'=>'required|max:191',
            'descricao'=>'required|max:191',
            'preco'=>'required|between:0,99999.99|regex:/^\d+(\.\d{1,2})?$/',
        ];
    }

    public function messages()
    {
        return[
            'preco.regex' => 'Inserir . (ponto) em vez de , (vírgula) no preço.'
        ];
    }
}
