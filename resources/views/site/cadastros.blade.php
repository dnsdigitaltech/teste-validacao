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
                    <h3 class="card-title">LISTA DE CANDIDATOS CADASTRADOS</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <table id="tableRequests" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="tableRequests">
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
                            @forelse( $candidatos as $candidato )
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
                            @empty
                            <tr>
                                <td colspan="90">
                                    <p>Nenhum cantidato cadastrado!</p>
                                </td>
                            </tr>
                            @endforelse
                            <tbody>
                            <tfoot class="bg-primary">
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
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
@endsection