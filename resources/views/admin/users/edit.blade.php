@extends('layouts.admin') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 py-3">
            <h3>Usuários</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index')}}">Usuários</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Alterar usuário</li>
                </ol>
            </nav>
        </div>
    @include('admin.includes.alert_messages')
    </div>
    @php $current_route = Request::route()->getName() @endphp
    <div class="row justify-content-md-center mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Alterar usuário</b></div>
                <div class="card-body">
                    <h6 class="card-title mb-2 text-danger"><b>*</b> campos obrigatórios</h6>
                    <form class="form-horizontal needs-validation" method="POST" action="{{ route('admin.users.update', $user) }}" novalidate>
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        @include('admin.users.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{--
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login - <b>Administrador</b></div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="email" class="col-lg-4 col-form-label text-lg-right">E-Mail</label>
                            <div class="col-lg-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required autofocus> @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-lg-4 col-form-label text-lg-right">Senha</label>
                            <div class="col-lg-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required> @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8 offset-lg-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection