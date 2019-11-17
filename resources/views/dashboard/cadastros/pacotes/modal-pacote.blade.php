<div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-cliente-label"><span class="font-weight-bold">{{ $pacote->nome }}</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <div class="row">

                        <div class="col">
                            <div class="desconto">
                                <img src="{{ asset('img/icons/desconto.png') }}">
                                <span class="valor">{{ $pacote->desconto }}%</span>
                            </div>
                        </div>
    
                        <div class="col-8">
                            <h5 class="header">Informações Básicas</h5>
                            <div class="row info">
                                <div class="col-8 font-weight-bold">Valor sem Desconto</div>
                                <div class="col">{{ $pacote->valor_sem_desconto }}</div>
                            </div>
                            <div class="row info">
                                <div class="col-8 font-weight-bold">Desconto</div>
                                <div class="col">{{ $pacote->desconto }}</div>
                            </div>
                        </div>       
                    
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>