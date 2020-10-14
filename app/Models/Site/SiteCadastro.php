<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteCadastro extends Model
{
    protected $fillable = ['name','rg', 'cpf', 'email', 'sexo', 'nascimento', 'naturalidade', 'telefone', 'celular', 'endereco', 'complemento', 'numero', 'bairro', 'uf'];
}
