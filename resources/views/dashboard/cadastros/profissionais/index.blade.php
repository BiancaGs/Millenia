@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100">
        <div>
            <h3>Profissionais</h3>
            <p>Número de Profissionais: 10</p>
        </div>
        <div>
            <a href="{{ route('profissionais.create') }}" class="btn btn-light btn-tool add">Adicionar um Profissional</a>
        </div>
    </div>

    <table class="table table-cadastro">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Celular</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pietro Zuntini Bonfim</td>
                <td>(15) 99999-9999</td>
                <td>(15) 9999-9999</td>
                <td class="td-actions">
                    <button class="btn-action"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>Pietro Zuntini Bonfim</td>
                <td>(15) 99999-9999</td>
                <td>(15) 9999-9999</td>
                <td class="td-actions">
                    <button class="btn-action"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>Pietro Zuntini Bonfim</td>
                <td>(15) 99999-9999</td>
                <td>(15) 9999-9999</td>
                <td class="td-actions">
                    <button class="btn-action"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>Pietro Zuntini Bonfim</td>
                <td>(15) 99999-9999</td>
                <td>(15) 9999-9999</td>
                <td class="td-actions">
                    <button class="btn-action"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>Pietro Zuntini Bonfim</td>
                <td>(15) 99999-9999</td>
                <td>(15) 9999-9999</td>
                <td class="td-actions">
                    <button class="btn-action"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>Pietro Zuntini Bonfim</td>
                <td>(15) 99999-9999</td>
                <td>(15) 9999-9999</td>
                <td class="td-actions">
                    <button class="btn-action"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

@endsection