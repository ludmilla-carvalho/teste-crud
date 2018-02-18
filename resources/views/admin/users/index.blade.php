@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12 py-3">
            <h3>Usuários</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index')}}">Usuários</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lista</li>
                </ol>
            </nav>
        </div>

        @include('admin.includes.alert_messages')
        
        <div class="col-sm-12 py-3">
            {!! $dataTable->table() !!}
        </div>  

    </div>
</div>

@include('admin.includes.modal_delete')

@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@endpush
