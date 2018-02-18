@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 py-3">
            <h3>Usuários</h3>
        </div>

        <div class="col-sm-12 py-3">
            {{--  $html->table()  --}}
            {!! $dataTable->table() !!}
        </div>  

        
        
        {{--  <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as Admin!
                </div>
            </div>
        </div>  --}}
    </div>
</div>

@include('admin.includes.modal')

@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@endpush
