@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12 py-3">
            <h3>Profile</h3>
        </div>
    </div>

    <div class="row justify-content-md-center mt-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Profile</b></div>
                <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Nome:</b> {{ $user->name}}</li>
                            <li class="list-group-item"><b>Email:</b> {{ $user->email}}</li>
                            <li class="list-group-item"><b>Data de nascimento:</b> {{ $user->birthday}}</li>
                            <li class="list-group-item"><b>CPF</b> {{ $user->cpf}}</li>
                        </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
