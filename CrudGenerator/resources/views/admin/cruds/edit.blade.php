@extends('layouts.sistema')

@section('content')

@component('admin.components.edit')
    @slot('title', 'Editar Crud')
    @slot('url', route('cruds.update', $crud->id))
    @slot('form')
        @include('admin.cruds.form')
    @endslot
@endcomponent

@endsection



