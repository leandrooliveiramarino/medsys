@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <a href="{{ route('patient.create') }}" class="btn btn-primary pull-left">Adicionar novo</a>
        </div>
    </div>
    <div class="row">
        <table class="display datatables" style="width:100%">
            <thead>
                <tr>
                    <th width="5%" class="text-center">Cód.</th>
                    <th width="20%" class="text-center">Nome</th>
                    <th width="25%" class="text-center dt-no-sort" class="text-center">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patient_list as $patient)
                <tr data-id="{{ $patient->id }}">
                    <td class="text-center">{{ $patient->id }}</td>
                    <td class="text-center">{{ $patient->name }}</td>
                    <td class="text-center manager">
                        <a href="{!! route('patient.edit', $patient->id) !!}" alt="Editar"><i class="fa fa-pencil"></i></a>
                        &nbsp;
                        &nbsp;
                        <form class="form-delete-button" method="post" action="{!! route('patient.destroy', $patient) !!}">
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