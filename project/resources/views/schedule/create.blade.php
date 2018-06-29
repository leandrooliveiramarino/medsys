@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default panel-form">
        <div class="panel-heading">
            <h4>Novo Agendamento</h4>
        </div>
        <div class="panel-body">
            <form method="POST" action="{{ route('schedule.store') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="schedule_date">Data da consulta *</label>
                            <input class="form-control" id="schedule_date" name="schedule_date" maxlength="100" autocomplete="off" required placeholder="Data da consulta">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="schedule_time">Horário consulta *</label>
                            <input class="form-control" id="schedule_time" name="schedule_time" maxlength="100" autocomplete="off" required placeholder="Data da consulta">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="consultation_time">Tempo da consulta (minutos) *</label>
                            <input type="number" class="form-control" id="consultation_time" name="consultation_time" maxlength="100" required placeholder="Tempo da consulta (minutos)">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="doctor">Médico *</label>
                            <select class="form-control" name="doctor_id" id="doctor" placeholder="Selecionar médico">
                                @foreach($doctor_list as $key => $name)
                                    <option value="{!! $key !!}">{!! $name !!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="patient">Paciente *</label>
                            <select class="form-control" name="patient_id" id="patient" placeholder="Selecionar Paciente">
                                @foreach($patient_list as $key => $name)
                                    <option value="{!! $key !!}">{!! $name !!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row pull-right">
                    <div class="col-sm-12 button--action">
                        <button class="btn btn-outline btn-primary">Salvar</button>
                        <a href="{!! route('schedule.index') !!}" class="btn btn-outline btn-default">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection