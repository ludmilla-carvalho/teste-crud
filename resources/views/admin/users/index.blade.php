@extends('layouts.app')

@section('content')

@include('admin.includes.alert_messages')

<div class="container">
    <div class="row">
        <div class="col-sm-12 py-3">
            <h3>Usuários</h3>
        </div>

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
