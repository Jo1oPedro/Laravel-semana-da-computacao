@extends('layouts.master')

@section('content')
    @component('admin.components.table')
        @slot('create', route('users.create'))
        @slot('titulo', "Usuarios")
        @slot('head')
            <th>Nome</th>
            <th>E-mail</th>
            <th>Cargo</th>
            <th>Nucleos</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role?->name }}</td>
                    <td>
                        <h5>
                            @foreach ($user->cores as $core)
                                <span class="badge bg-primary">
                                    {{ $core->name ?? "" }}
                                </span>
                            @endforeach
                        </h5>
                    </td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-dark">
                            <i class="fas fa-search"></i>
                        </a>   
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">
                            <i class="fas fa-pen"></i>
                        </a>    
                        @can('delete', $user)
                            <form class="form-delete d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach

            @if(session('sucesso'))
                <h1> {{ session('sucesso') }} </h1>
            @endif
        @endslot
    @endcomponent
@endsection