@extends('layouts.admin') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 py-3">
            <h3>Usuários</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index')}}">Usuários</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Adicionar usuário</li>
                </ol>
            </nav>
        </div>
    @include('admin.includes.alert_messages')
    </div>
    @php $current_route = Request::route()->getName() @endphp
    <div class="row justify-content-md-center mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Adicionar usuário</b></div>
                <div class="card-body">
                    <h6 class="card-title mb-2 text-danger"><b>*</b> campos obrigatórios</h6>
                    <form class="form-horizontal needs-validation" method="POST" action="{{ route('admin.users.store') }}" novalidate>
                        {{ csrf_field() }}
    @include('admin.users.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection