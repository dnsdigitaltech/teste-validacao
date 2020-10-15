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

        <div class="content">
            <div class="card card-gray">
                <div class="card-header">
                    <h3 class="card-title">INFORME SEU CPF</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        {!!Form::open(['route' => 'site.cadastrar.buscar','class' => 'form form-search form-ds', 'files' => 'true', 'onsubmit' => 'ShowLoading()'])!!}
                        <div class="input-group input-group-sm">
                            {!! Form::text('cpf', null, ['class' => 'form-control form-control-navbar', 'placeholder' => '___.___.___-__', 'data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask=""', 'required']) !!}
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {!!Form::close()!!}                        
                    @forelse( $candidatos as $candidato )
                        <h3>Você esta cadastro em nosso sistema, segue abaixo suas informações</h3>
                        <table class="table table-bordered table-hover dataTable" role="grid" aria-describedby="tableRequests">
                            <thead class="bg-primary">
                                <tr>
                                    <th>NOME</th>
                                    <th>CPF</th>
                                    <th>E-MAIL</th>
                                    <th>SEXO</th>
                                    <th>NASCIMENTO</th>
                                    <th>CELULAR</th>
                                    <th>CEP</th>
                                    <th>ENDEREÇO</th>
                                    <th>BAIRRO</th>
                                    <th>UF</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$candidato->name}}</td>
                                <td>{{$candidato->cpf}}</td>
                                <td>{{$candidato->email}}</td>
                                <td>{{$candidato->sexo}}</td>
                                <td>{{$candidato->nascimento}}</td>
                                <td>{{$candidato->celular}}</td>
                                <td>{{$candidato->cep}}</td>
                                <td>{{$candidato->endereco}} {{$candidato->numero}} {{$candidato->complemento}}</td>
                                <td>{{$candidato->bairro}}</td>
                                <td>{{$candidato->uf}}</td>
                            </tr>
                        </table>
                    @empty
                        <p>Não há cadastro com este CPF em nosso sistema!</p>
                    @endforelse
                </div>
            </div> 
        </div>
    </div>
@endsection