@extends('layouts.admin-lte.appsite')
@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

            <div class="content-load">
                {!!Form::open(['route' => 'site.cadastrar.store','class' => 'form form-search form-ds', 'files' => 'true', 'onsubmit' => 'ShowLoading()'])!!}
                        <div class="card card-gray">
                            <div class="card-header">
                                <h3 class="card-title">DADOS DO CANDIDATO</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Nome Completo</label>
                                            {!! Form::text('name',null, ['class' => 'form-control', 'maxlength' => '100', 'minlength' => '3', 'placeholder' => 'Nome Completo', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="nascimento">Data Nasc.</label>
                                            {!! Form::text('nascimento', null, ['class' => 'form-control', 'placeholder' => '__/__/____', 'id' => 'datepicker1', 'data-inputmask="&quot;mask&quot;: &quot;99/99/9999&quot;" data-mask=""', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="sexo">Sexo</label>
                                            {!! Form::text('sexo',null,['class' => 'form-control', 'minlength' => '1', 'placeholder' => 'Sexo', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="rg">RG</label>
                                            {!! Form::text('rg',null,['class' => 'form-control', 'maxlength' => '15', 'placeholder' => 'RG', 'required']) !!}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="cpf">CPF</label>
                                            {!! Form::text('cpf', null, ['class' => 'form-control', 'placeholder' => '___.___.___-__', 'data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask=""', 'required']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            {!! Form::text('email',null, ['class' => 'form-control', 'maxlength' => '100', 'placeholder' => 'seuemail@seuemail.com', 'required']) !!}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="telefone">Telefone</label>
                                            {!! Form::text('telefone', null, ['class' => 'form-control', 'placeholder' => '(__)____-____', 'id' => 'CpfLeiloeiro', 'data-inputmask="&quot;mask&quot;: &quot;(99)9999-9999&quot;" data-mask=""', 'required']) !!}
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="celular">Celular</label>
                                            {!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => '(__)_____-____', 'id' => 'CpfLeiloeiro', 'data-inputmask="&quot;mask&quot;: &quot;(99)99999-9999&quot;" data-mask=""', 'required']) !!}
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="naturalidade">Naturalidade</label>
                                            {!! Form::text('naturalidade',null,['class' => 'form-control', 'maxlength' => '30', 'placeholder' => 'Naturalidade', 'required']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-gray">
                            <div class="card-header">
                                <h3 class="card-title">FILIAÇÃO DO CANDIDATO</h3>
                            </div>
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="pai">Nome Completo do pai</label>
                                            {!! Form::text('pai',null, ['class' => 'form-control', 'maxlength' => '100', 'minlength' => '3', 'placeholder' => 'Nome Completo do pai', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mae">Nome Completo da mãe</label>
                                            {!! Form::text('mae',null, ['class' => 'form-control', 'maxlength' => '100', 'minlength' => '3', 'placeholder' => 'Nome Completo da mãe', 'required']) !!}
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="card card-gray">
                            <div class="card-header">
                                <h3 class="card-title">EDNDEREÇO DO CANDIDATO</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="cep">CEP</label>
                                            {!! Form::text('cep',null, ['class' => 'form-control ','placeholder' => '_____-___', 'data-inputmask="&quot;mask&quot;: &quot;99999-999&quot;" data-mask=""', 'id'=>'cep', 'size'=>'10','maxlength'=>'9', 'required' ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="endereco">Endereço</label>
                                            {!! Form::text('endereco',null, ['class' => 'form-control', 'id' => 'rua', 'placeholder' => 'Endereço', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="numero">Nº</label>
                                            {!! Form::text('numero',null, ['class' => 'form-control',  'maxlength' => '5', 'placeholder' => 'Nº', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="complemento">Complemento</label>
                                            {!! Form::text('complemento',null, ['class' => 'form-control',  'maxlength' => '11', 'placeholder' => 'Complemento', ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="bairro">Bairro</label>
                                            {!! Form::text('bairro',null, ['class' => 'form-control', 'id' => 'bairro', 'placeholder' => 'Bairro', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="uf">UF</label>
                                            {!! Form::text('uf',null, ['class' => 'form-control', 'id' => 'uf', 'placeholder' => 'UF', 'required']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" id="hidenBoton" title="Cadastrar"><i class="fas fa-check-circle"></i> Cadastrar</button>
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection