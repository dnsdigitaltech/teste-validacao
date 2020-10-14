<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('rg', 15)->unique();
            $table->string('cpf', 15)->unique();
            $table->string('email', 100)->unique();
            $table->string('sexo', 2);
            $table->date('nascimento');
            $table->string('naturalidade', 50);
            $table->string('telefone', 15);
            $table->string('celular', 15);
            $table->string('pai', 100);
            $table->string('mae', 100);
            $table->string('cep', 9);
            $table->string('endereco', 100);
            $table->string('complemento', 10);
            $table->string('numero', 10);
            $table->string('bairro', 50);
            $table->string('uf', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
