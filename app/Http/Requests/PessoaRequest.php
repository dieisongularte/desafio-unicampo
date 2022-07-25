<?php

namespace App\Http\Requests;

use App\Rules\CpfCnpjRule;
use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
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
        $tipo = $this->input('tipo');
        $arrayValidacao = ['required', 'string', new CpfCnpjRule($tipo)];
        $validacao = (is_null($tipo)) ? $arrayValidacao[0] : $arrayValidacao;

        return [
            'nome_completo'   => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'tipo'            => 'required|size:1|in:F,J',
            'cpf_cnpj'        => $validacao,
            'email'           => 'required|string|regex:/(.+)@(.+)\.(.+)/i',
            'endereco'        => 'required|string|max:255',
            'latitude'        => 'required|numeric',
            'longitude'       => 'required|numeric',
        ];
    }
}
