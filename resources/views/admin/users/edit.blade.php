@extends('layouts.master')

@section('content')
    @component('admin.components.edit')
        @slot('title', "Editar usuário")
        @slot('url', route('users.update', $user->id))
        @slot('form')
            @include('admin.users.form')
        @endslot
    @endcomponent
@endsection