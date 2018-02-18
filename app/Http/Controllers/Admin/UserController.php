<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\DataTables\UserDataTable;

//use DataTables;

//use Yajra\DataTables\Html\Builder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('admin.users.index');
    }
    /*public function index(Builder $builder)
    {
        if (request()->ajax()) {
            return DataTables::of(User::query())->toJson();
        }
        //table table-striped table-bordered
        $html = $builder->columns([
            ['data' => 'id', 'name' => 'id', 'title' => 'Id'],
            ['data' => 'name', 'name' => 'name', 'title' => 'Nome'],
            ['data' => 'email', 'name' => 'email', 'title' => 'Email'],
            ['data' => 'cpf', 'name' => 'cpf', 'title' => 'CPF'],
            ['data' => 'birthday', 'name' => 'birthday', 'title' => 'Data de nascimento', 'searchable' => false]
        ])->parameters([
            'pageLength' => 5,
            'lengthMenu' => [ 5, 10, 25, 50 ],
            //'dom'          => 'Bfrtip',
            'buttons'      => ['export'],
            'language' => ['url' => "http://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"]
        ]);

        return view('admin.users.index', compact('html'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
