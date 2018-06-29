@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <a href="{{ route('schedule.create') }}" class="btn btn-primary pull-left">Adicionar novo</a>
        </div>
    </div>
    <div class="row">
        <table class="display datatables" style="width:100%">
            <thead>
                <tr>
                    <th width="5%" class="text-center">Cód.</th>
                    <th width="20%" class="text-center">Médico</th>
                    <th width="20%" class="text-center">Paciente</th>
                    <th width="30%" class="text-center">Data da Consulta</th>
                    <th width="25%" class="text-center dt-no-sort" class="text-center">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedule_list as $schedule)
                <tr data-id="{{ $schedule->id }}">
                    <td class="text-center">{{ $schedule->id }}</td>
                    <td class="text-center">{{ $schedule->doctor->name }}</td>
                    <td class="text-center">{{ $schedule->patient->name }}</td>
                    <td class="text-center">{{ $schedule->consultation_datetime }}</td>
                    <td class="text-center manager">
                        <a href="{!! route('schedule.edit', $schedule->id) !!}" alt="Editar"><i class="fa fa-pencil"></i></a>
                        &nbsp;
                        &nbsp;
                        <form class="form-delete-button" method="post" action="{!! route('schedule.destroy', $schedule) !!}">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <button><i class="fa fa-trash"></i></button>
                        </form>
                        <!-- <a href="{!! route('schedule.destroy', $schedule->id) !!}" alt="Remover"><i class="fa fa-trash"></i></a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection