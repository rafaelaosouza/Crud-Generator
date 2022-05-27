@extends('layouts.sistema')

@section('content')

@component('admin.components.create')
    @slot('title', 'Cadastrar Crud')
    @slot('url', route('cruds.store'))
    @slot('form')
        @include('admin.cruds.form')
    @endslot
@endcomponent

@endsection
