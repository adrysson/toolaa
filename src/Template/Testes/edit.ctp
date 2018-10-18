<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $teste->id],
                ['confirm' =>__('Você tem certeza que deseja apagar o teste {0}?', $teste->id),
                'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Apagar teste {0}', $teste->id), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Ver testes cadastrados'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <?= $this->element('Testes/form', ['tipo' => 'Editar']) ?>
    </div>
</div>
