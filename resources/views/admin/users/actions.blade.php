<a href="{{ route('admin.users.edit', ['user' => $model->id] ) }}" class="btn btn-success btn-sm float-left mr-2" title="Editar"><i class="fa fa-edit"></i></a>

<form action="{{ route('admin.users.destroy', ['user' => $model->id]) }}" method="post" class="form-inline float-left form-delete" data-message="Confirma a exclusão do usuário {{ $model->name }}?" data-form="deleteForm">
        {!! csrf_field() !!}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger btn-sm" title="Apagar"><i class="fa fa-trash"></i></button>
    </form>