<div class="row mt-5">
        
    <div class="col">
        <h5>Contato</h5>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente" autocomplete="new" required value="{{ $cliente->nome }}">
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="tel-celular">Celular</label>
                    <input type="tel" class="form-control" id="tel-celular" name="tel-celular" placeholder="(15) 99999-9999" autocomplete="new" required value="{{ $cliente->telefone_celular }}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="tel-residencial">Residencial</label>
                    <input type="tel" class="form-control" id="tel-residencial" name="tel-residencial" placeholder="(15) 33333-3333" autocomplete="new" value="{{ $cliente->telefone_residencial }}">
                </div>
            </div>
        </div>
        
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="deseja-notificacao" name="deseja-notificacao" {{ $cliente->deseja_notificacao ? 'checked' : '' }}>
            <label class="custom-control-label" for="deseja-notificacao">Receber notificações</label>
        </div>

        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email do cliente" autocomplete="new" required value="{{ old('email', $cliente->email) }}">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>Este e-mail já está em uso.</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="nascimento">Data de Nascimento</label>
            <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="Data de Nascimento" autocomplete="new" required value="{{ $cliente->data_nascimento }}">
        </div>

        <h5 class="mt-4">Informações Adicionais (Opcional)</h5>

        <label for="profissao">Profissão</label>
        <select class="browser-default custom-select" id="profissao" name="profissao">
            <option></option>
            @foreach ($profissoes as $profissao)
                <option value="{{ $profissao->id }}" {{ $cliente->profissao ? ($cliente->profissao->nome == $profissao->nome ? 'selected' : '') : '' }}>{{ $profissao->nome }}</option>
            @endforeach
        </select>
        
        {{-- <label class="mt-3" for="indicacao">Indicação</label>
        <select class="browser-default custom-select" id="indicacao" name="indicacao">
            <option selected>Indicação</option>
            <option value="1">Amigo</option>
        </select> --}}
    
    </div>

    <div class="col">
        <h5>Endereço</h5>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" placeholder="99999-999" name="cep" autocomplete="new" required value="{{ $cliente->cep }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <select class="browser-default custom-select" id="cidade" name="cidade" required>
                        <option></option>
                        @foreach ($cidades as $cidade)
                            <option value="{{ $cidade->id }}" {{ $cliente->cidade ? ($cliente->cidade->nome == $cidade->nome ? 'selected' : '') : '' }}>{{ $cidade->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" autocomplete="new" required value="{{ $cliente->bairro }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" id="rua" placeholder="Rua" name="rua" autocomplete="new" required value="{{ $cliente->rua }}">
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="numero-rua">Número</label>
                    <input type="text" class="form-control" id="numero-rua" placeholder="Nº" name="numero-rua" autocomplete="new" required value="{{ $cliente->numero_rua }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" placeholder="Complemento" name="complemento" autocomplete="new" value="{{ $cliente->complemento_rua }}">
        </div>

    </div>

</div>