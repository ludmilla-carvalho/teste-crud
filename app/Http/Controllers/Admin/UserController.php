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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create', ['user' => new User()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->_validate($request);
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        if ($user = User::create($data)) {
            return response()->redirectToRoute('admin.users.index')->with('success', 'Usuário criado com sucesso!');
        } else {
            return response()->redirectToRoute('admin.users.create')->with('error', 'Erro ao criar usuário!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$user = User::find($id)) {
            return response()->redirectToRoute('home')->with('error', 'Usuário não encontrado!');
        } else {
            return view('home', compact('user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$user = User::find($id)) {
            return response()->redirectToRoute('admin.users.index')->with('error', 'Usuário não encontrado!');
        } else {
            return view('admin.users.edit', compact('user'));
        }
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
        //$2y$10$FpfIS6fYXqY/Nc7lvqAnkuGl1kvQEfJ4RXoVXTcdzFvwyMlhI2CQ2
        if (!$user = User::find($id)) {
            return response()->redirectToRoute('admin.users.index')->with('error', 'Usuário não encontrado!');
        } else {
            $this->_validate($request);
            $data = $request->all();
            if (strlen($data['password']) > 5) {
                $data['password'] = bcrypt($data['password']);
            } else {
                unset($data['password']);
            }
            $user->fill($data);
            $user->save();
            return response()->redirectToRoute('admin.users.index')->with('success', 'Usuário alterado com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$user = User::find($id)) {
            return response()->redirectToRoute('admin.users.index')->with('error', 'Usuário não encontrado!');
        } else {
            $user->delete();
            return response()->redirectToRoute('admin.users.index')->with('success', 'Usuário excluído com sucesso!');
        }
    }

    /**
     * Form Validation
     *
     * @param Request $request
     * @return void
     */
    protected function _validate(Request $request)
    {
        $roles = [
            'name'  => 'required|string|max:198',
            'email' => 'required|string|email|unique:users,email,' . $request->id,
            'cpf' => 'required|formato_cpf|cpf',
            'birthday' => 'required|date_format:d/m/Y'
        ];

        if ($request->password) {
            $roles['password'] = 'required|string|min:6|confirmed';
        }

        return $this->validate($request, $roles);
    }
}
