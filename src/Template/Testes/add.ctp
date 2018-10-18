<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Ver testes cadastrados'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <?= $this->element('Testes/form', ['tipo' => 'Cadastrar']) ?>
    </div>
</div>
