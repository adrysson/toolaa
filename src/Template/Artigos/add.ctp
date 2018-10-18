<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['action' => 'index'],
            ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('List Artigos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Categorias', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('List Categorias'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Categorias', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('New Categoria'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Testes', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('List Testes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Testes', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('New Testis'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <?= $this->Form->create($artigo) ?>
        <span class="card-title green-text"><h5>Cadastrar artigo</h5></span>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('titulo') ?>
                </div>
            </div>
            <div class="col s10 m4 l4" id="container-categoria">
                <div class="input-field" id="input-select-categoria">
                    <?= $this->Form->control('categoria_id', ['options' => $categorias]) ?>
                </div>
                <div class="input-field" id="input-add-categoria">
                    <?= $this->Form->control('categoria.nome', ['label' => 'Categoria']) ?>
                </div>
            </div>
            <div class="col s2 m2 l2">
                <?= $this->Html->link(
                    '<i class="material-icons">add</i>',
                    'javascript:;',
                    [
                        'class' => 'btn-floating green tooltipped',
                        'id' => 'add-categoria',
                        'escape' => false,
                        'data-delay' => '0',
                        'data-position' => 'left',
                        'data-tooltip' => 'Inserir  categoria não listada',
                        'onclick' => 'addCategoria()',
                    ]
                ); ?>
                <?= $this->Html->link(
                    '<i class="material-icons">refresh</i>',
                    'javascript:;',
                    [
                        'class' => 'btn-floating teal tooltipped',
                        'id' => 'list-categorias',
                        'escape' => false,
                        'data-delay' => '0',
                        'data-position' => 'left',
                        'data-tooltip' => 'Listar categorias novamente',
                        'onclick' => 'listCategorias()',
                        'style' => 'display:none',
                    ]
                ); ?>
            </div>
        </div>
        <div class="row">
            <div class="">
                <?= $this->Form->button(__('Salvar'), ['class' => 'btn waves-effect waves-light col s12 m3 l3 offset-s0 offset-m9 offset-l9 green']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<?php $this->start('script') ?>
<script>
$(function(){
    inputAddCategoria = $('#input-add-categoria').detach();
})

let addCategoria = function () {
    $('#add-categoria').hide()
    inputSelectCategoria = $('#input-select-categoria').detach()
    $('#list-categorias').show()
    inputAddCategoria.appendTo('#container-categoria');
}
let listCategorias = function () {
    $('#list-categorias').hide()
    inputAddCategoria = $('#input-add-categoria').detach();
    $('#input-add-categoria').hide()
    $('#add-categoria').show()
    inputSelectCategoria.appendTo('#container-categoria');
}
</script>
<?php $this->end() ?>
