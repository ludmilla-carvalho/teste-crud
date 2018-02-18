<input type="hidden" name="id" value="{{old('id',$user->id)}}">

<div class="form-group row">
    <label for="email" class="col-lg-2 col-form-label text-lg-right">Nome*</label>
    <div class="col-lg-9">
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $user->name) }}"
            required autofocus>
        <div class="invalid-feedback">
            {{ ($errors->has('name')) ? $errors->first('name') : 'Nome é obrigatório.' }}
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-lg-2 col-form-label text-lg-right">E-Mail*</label>
    <div class="col-lg-9">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $user->email) }}"
            required>
        <div class="invalid-feedback">
            {{ ($errors->has('email')) ? $errors->first('email') : 'Email é obrigatório.' }}
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-lg-2 col-form-label text-lg-right">CPF*</label>
    <div class="col-lg-9">
        <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }} cpf" name="cpf" value="{{ old('cpf', $user->cpf) }}"
            required>
        <div class="invalid-feedback">
            {{ ($errors->has('cpf')) ? $errors->first('cpf') : 'CPF é obrigatório.' }}
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-lg-2 col-form-label text-lg-right">Data de nascimento*</label>
    <div class="col-lg-9">
        <input type="text" id="datepicker" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }} date" name="birthday" value="{{ old('birthday', $user->birthday) }}" required>
        <div class="invalid-feedback">
            {{ ($errors->has('birthday')) ? $errors->first('birthday') : 'Data de nascimento é obrigatória.' }}
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-lg-2 col-form-label text-lg-right">Senha
        @if($current_route == 'admin.users.create') * @endif</label>
    <div class="col-lg-9">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
            @if($current_route=='admin.users.create' ) required @endif>
        <div class="invalid-feedback">
            {{ ($errors->has('password')) ? $errors->first('password') : 'Senha é obrigatória.' }}
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-lg-2 col-form-label text-lg-right">Confirmação da senha @if($current_route == 'admin.users.create') * @endif</label>
    <div class="col-lg-9">
        <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation"
            @if($current_route=='admin.users.create' ) required @endif>
        <div class="invalid-feedback">
            {{ ($errors->has('password_confirmation')) ? $errors->first('password_confirmation') : 'Confirmação da senha é obrigatória.'
            }}
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-10 offset-lg-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
                    