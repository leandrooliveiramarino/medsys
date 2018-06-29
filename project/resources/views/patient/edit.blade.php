@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default panel-form">
        <div class="panel-heading">
            <h4>Editar Paciente</h4>
        </div>
        <div class="panel-body">
            <form method="POST" action="{{ route('patient.update', $patient) }}">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">Nome *</label>
                            <input class="form-control" id="name" name="name" value="{{ old('name') ?: $patient->name }}" maxlength="100" autocomplete="off" required placeholder="Nome">
                        </div>
                    </div>
                </div>
                <div class="row pull-right">
                    <div class="col-sm-12 button--action">
                        <button class="btn btn-outline btn-primary">Atualizar</button>
                        <a href="{!! route('patient.index') !!}" class="btn btn-outline btn-default">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection