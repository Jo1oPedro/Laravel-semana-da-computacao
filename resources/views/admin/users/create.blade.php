@extends('layouts.master')

@section('content')
    @component('admin.components.create')
        @slot('title', 'Cadastrar novo usuário')
        @slot('url', route('users.store'))
        @slot('form')
            @include('admin.users.form')
        @endslot
    @endcomponent
@endsection