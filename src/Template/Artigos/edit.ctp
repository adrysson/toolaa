<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $artigo->id],
                ['confirm' =>__('Você tem certeza que deseja apagar o artigo {0}?', $artigo->titulo),
                'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Apagar artigo {0}', $artigo->id), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Ver artigos cadastrados'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <?= $this->element('Artigos/form', ['tipo' => 'Editar']) ?>
    </div>
</div>

<?= $this->Html->script('forms/artigos', ['block'=>'script']) ?>
