@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 py-3">
            <h3>Dashboard</h3>
        </div>
        
        
        <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-users"></i> Usuários</h5>
                        <p class="card-text">{{ $users }} usuários cadastrados</p>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
