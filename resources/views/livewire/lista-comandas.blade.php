<div>

    <div class="row">
        <div class="col-6">
            <label for="tipo-comanda">Tipo de Comanda</label>
            <select class="browser-default custom-select" id="tipo-comanda" wire:model="abertas">
                <option selected value="1">Abertas</option>
                <option value="0">Fechadas</option>
            </select>    
        </div>
    </div>

    <div class="crud-tool-bar">
        <div class="input-group mt-3 mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <input type="text" name="buscar-cliente" id="buscar-cliente" class="form-control" placeholder="Buscar cliente..." autocomplete="new" wire:model="query">
        </div>
    </div>

    @if (!empty($comandas))
        <div class="comandas mt-4">
            @foreach ($comandas as $comanda)
                @php
                    $comanda = App\Comanda::find($comanda['id'])
                @endphp
                <a href="{{ route('comandas.edit', $comanda->id) }}" class="comanda">
                    <div class="header">
                        {{ $comanda->cliente->nome }}
                    </div>
                    <div class="info-basica-comanda">
                        {{-- <span class="font-weight-bold">Cliente</span> <span class="valor">{{ $comanda->cliente->nome }}</span> --}}
                        <span class="font-weight-bold">Data</span> <span class="valor">{{ date('d/m/Y', $comanda->created_at->timestamp) }}</span>
                    </div>
                    <div class="servicos-comanda">
                        <ul class="list-group">
                            @foreach ($comanda->servicos as $servico)
                                <li class="list-group-item">{{ $servico->nome }}</li>
                            @endforeach
                        </ul>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <div class="alert alert-info mt-3" role="alert">
            Não foi encontrada nenhuma comanda.
        </div>
    @endif
</div>
