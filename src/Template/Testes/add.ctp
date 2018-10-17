<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $testis
 */
 $this->layout = 'Materialize.materialize';

?>
<div class="fixed-action-btn click-to-toggle">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['action' => 'index'],
            ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Testes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Artigos', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Artigos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Artigos', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Artigo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Ferramentas', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Ferramentas'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Ferramentas', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Ferramenta'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Usuarios', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Usuarios'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Usuarios', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Usuario'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Subtestes', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Subtestes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Subtestes', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Subtestis'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <?= $this->Form->create($testis) ?>
        <span class="card-title green-text"><?= __('Add Testis') ?></span>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('artigo_id', ['options' => $artigos]) ?>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('ferramenta_id', ['options' => $ferramentas]) ?>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('usuario_id', ['options' => $usuarios]) ?>
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
