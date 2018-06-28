@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <a href="{{ route('schedules.create') }}" class="btn btn-primary pull-left">Adicionar novo</a>
        </div>
    </div>
    <div class="row">
        <table class="display datatables" style="width:100%">
            <thead>
                <tr>
                    <th width="20%" class="text-center">Nome</th>
                    <th width="20%" class="text-center">E-mail</th>
                    <th width="15%" class="text-center">CPF/CNPJ</th>
                    <th width="15%" class="text-center">Telefone</th>
                    <th width="15%" class="text-center dt-no-sort" class="text-center">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                <tr data-id="2">
                    <td class="text-center">nome</td>
                    <td class="text-center">emailFormatted</td>
                    <td class="text-center">cpfCnpjFormatted</td>
                    <td class="text-center">telefoneFormatted</td>
                    <td class="text-center manager">
                        <a href="#" alt="Editar"><i class="fa fa-pencil"></i></a>
                        &nbsp;
                        &nbsp;
                        <a href="#" alt="Remover" data-delete="2" data-title="Remover cliente" data-body="Realmente deseja remover o cliente?"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection