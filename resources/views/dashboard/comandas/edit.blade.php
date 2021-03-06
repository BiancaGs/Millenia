@extends('layouts.dashboard')

@section('title', 'Atualizar Comanda')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('comandas.update', $comanda->id) }}">
        @method('PUT')
        @csrf

        <h3>Comanda #{{ $comanda->id }}</h3>
        
        @include('dashboard.comandas._form')
        
        @if ($comanda->aberta)
            <input type="submit" name="fechar-comanda" class="btn btn-danger mr-1 btn-tool mt-4" value="Fechar Comanda">
            <button type="submit" class="btn btn-primary btn-tool mt-4">Atualizar comanda</button>
        @else
            <input type="hidden" name="abrir-comanda" value="true">
            <button name="abrir-comanda" type="submit" class="btn btn-primary btn-tool mt-4">Reabrir comanda</button>
        @endif
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/comandas/create.js') }}"></script>
    <script>
        $(document).ready(function() {
            
            // Pre seleciona os servicos
            $('#servicos').val(@json($servicosSelecionados)).trigger('change');

        });
    </script>
@endsection
