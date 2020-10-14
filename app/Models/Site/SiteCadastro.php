<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Model;

class SiteCadastro extends Model
{
    protected $fillable = ['name','rg', 'cpf', 'email', 'sexo', 'nascimento', 'naturalidade', 'telefone', 'celular', 'pai', 'mae','cep', 'endereco', 'complemento', 'numero', 'bairro', 'uf'];

    /**
     * recupera os dados e salva na base
     *
     * @return \Illuminate\Http\Response
     */
    public function newCadastro($request) {          
        $data = $request->all();
        //dd($data);
        return $this->create($data);
    }
}
