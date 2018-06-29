@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <a href="{{ route('doctor.create') }}" class="btn btn-primary pull-left">Adicionar novo</a>
        </div>
    </div>
    <div class="row">
        <table class="display datatables" style="width:100%">
            <thead>
                <tr>
                    <th width="5%" class="text-center">Cód.</th>
                    <th width="20%" class="text-center">Nome</th>
                    <th width="20%" class="text-center">Especialidade</th>
                    <th width="25%" class="text-center dt-no-sort" class="text-center">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctor_list as $doctor)
                <tr data-id="{{ $doctor->id }}">
                    <td class="text-center">{{ $doctor->id }}</td>
                    <td class="text-center">{{ $doctor->name }}</td>
                    <td class="text-center">{{ $doctor->expertise->expertise }}</td>
                    <td class="text-center manager">
                        <a href="{!! route('doctor.edit', $doctor->id) !!}" alt="Editar"><i class="fa fa-pencil"></i></a>
                        &nbsp;
                        &nbsp;
                        <form class="form-delete-button" method="post" action="{!! route('doctor.destroy', $doctor) !!}">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <button><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection