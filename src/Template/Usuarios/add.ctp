<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['action' => 'index'],
            ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Usuarios'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Grupos', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Grupos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Grupos', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Grupo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Perfis', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Perfis'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Perfis', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Perfi'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Testes', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Testes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Testes', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Testis'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <?= $this->Form->create($usuario) ?>
        <span class="card-title green-text"><?= __('Cadastrar Usuario') ?></span>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('nome') ?>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('email', ['type' => 'email', 'class' => 'validate']) ?>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('senha', ['type' => 'password']) ?>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('grupo_id', ['options' => $grupos]) ?>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('perfil_id', ['options' => $perfis]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light col s12 m3 l3 offset-s0 offset-m9 offset-l9 green-background']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
