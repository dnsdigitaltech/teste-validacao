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
            <div class="links">
                <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">Cadastrados</span>
                          <span class="info-box-number text-center text-muted mb-0">{{ $total }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">Maculinos</span>
                          <span class="info-box-number text-center text-muted mb-0">{{ $totalm }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">Femininos</span>
                          <span class="info-box-number text-center text-muted mb-0">{{ $totalf }}<span>
                        </span></span></div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection