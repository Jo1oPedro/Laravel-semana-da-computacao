@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>
            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
        </strong>
    </div>
@endif

<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" autofocus class="form-control" required value="{{ old('name', $user->name ?? '') }}">
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" autofocus class="form-control" required value="{{ old('email', $user->email ?? '') }}">
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="password" class="required">Senha </label>
        <input type="password" name="password" id="password" autofocus class="form-control" required value="{{ old('password', $user->password ?? '') }}">
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="role_id">Cargo</label>
        <select class="form-control form-select form-select-sm" name="role_id" id="role_id" value="{{old('role_id', $user->role->id ?? null) }}">
            <option value="" hidden>Selecione um cargo</option>
            @foreach ($roles ?? [] as $role)
                <option {{ ($user->role->id ?? '' == $role->id) ? 'selected' : '' }} value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-12 col-md-4">
    <label for="core_id">Núcleos</label>
    <select class="form-control form-select form-select-sm" multiple name="core_id[]" id="core_id" value="{{ json_encode(old('core_id', ((isset($user)) ? $user->cores?->pluck('id') : null))) }}">
        <option value="" hidden>Selecione um cargo</option>
        @foreach ($cores ?? [] as $core)
            <option {{ ($user->cores()->find($core->id) != null) ? 'selected' : '' }} value="{{ $core->id }}">{{ $core->name }}</option>
        @endforeach
    </select>
</div>
</div>
