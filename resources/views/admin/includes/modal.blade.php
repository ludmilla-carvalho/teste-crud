{{--  <div class="modal" id="confirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title text-danger">Confirmação de exclusão</h2>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja excluir o registro ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default pull-right" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-sm btn-danger" id="delete-btn">Apagar</button>
                
            </div>
        </div>
    </div>
</div>  --}}

<div class="modal" tabindex="-1" role="dialog" id="confirm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-white bg-danger">
            <h5 class="modal-title">Exclusão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Tem certeza que deseja excluir o registro ?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="delete-btn">Excluir</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
    </div>