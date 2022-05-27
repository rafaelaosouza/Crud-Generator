@extends('layouts.sistema')
@section('content')

@component('admin.components.table')
    @slot('create', route('cruds.create'))
    @slot('index', route('cruds.index'))
    @slot('title', 'Cruds')
    @slot('head')
        <th width="90%">Nome</th>
        <th width="10%"></th>
    @endslot
    @slot('body')
        @foreach ($cruds as $crud)
            <tr>
                <td>{{ $crud->name }}</td>
                <td class="options">
                    <a href="{{ route('cruds.edit', $crud->id) }}" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>

                    <form class="form-delete" action="{{ route('cruds.destroy', $crud->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endslot
@endcomponent

@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush
