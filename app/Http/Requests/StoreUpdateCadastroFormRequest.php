<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Request;

class StoreUpdateCadastroFormRequest extends FormRequest
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
        //pegar id para editar o mesmo item
        $id = Request::all();
        $email = $id['email'];
        return [
            //regras de validação
            'name' => 'required|min:3|max:100',
            'rg' => "required|max:15",
            'cpf' => "required|max:15",
            'email' => "required|min:3|max:100|unique:site_cadastros,email,{$email}",
            'sexo' => 'required',
            'nascimento' => 'required|date|max:8',
            'naturalidade' => 'required',
            'celular' => 'required',
            'pai' => 'required|min:3|max:100',
            'mae' => 'required|min:3|max:100',
            'cep' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'O campo " Nome " é obrigatório!',
            'name.min' => 'O campo " Nome " não pode ser inferior a 3 digitos!',
            'name.max' => 'O campo " Nome " não pode ser superior a 100 digitos!',
            'rg.required' => 'O campo " RG " é obrigatório',
            'rg.max' => 'O campo " RG " não pode ser superior a 15 digitos!',
            'rg.unique' => 'Sua Matrícula com este RJ já está cadastrada em nosso sistema!',
            'cpf.required' => 'O campo " CPF " é obrigatório',
            'cpf.max' => 'O campo " CPF " não pode ser superior a 15 digitos!',
            'cpf.unique' => 'Sua Matrícula com este CPF já está cadastrada em nosso sistema!',
            'nascimento.required' => 'O campo " Data de Nascimento " é obrigatório!',
            'nascimento.date' => 'O campo " Data de Nascimeto " está inválido!',
            'nascimento.max' => 'O campo " Data de Nascimeto " não pode ser superior a 8 digitos!',
            'email.required' => 'O campo " E-mail " é obrigatório!',
            'email.unique' => 'Já existe este email cadastrado!',
            'naturalidade.required' => 'O campo " Naturalidade " é obrigatório',
            'pai.required' => 'O campo " Nome do Pai " é obrigatório',
            'mae.required' => 'O campo " Nome da mãe " é obrigatório',
            'cep.required' => 'O campo " CEP " é obrigatório'
        ];
    }

}