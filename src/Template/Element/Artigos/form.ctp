<?= $this->Form->create($artigo) ?>
<span class="card-title green-text"><h5><?= $tipo ?> artigo</h5></span>
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
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn waves-effect waves-light col s12 m3 l3 offset-s0 offset-m9 offset-l9 green']) ?>
    <?= $this->Form->end() ?>
</div>

<?= $this->Html->script('forms/artigos', ['block'=>'script']) ?>
