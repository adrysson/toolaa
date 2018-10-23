<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $subtestis
 */
  $this->layout = 'Materialize.materialize';

?>
<div class="fixed-action-btn click-to-toggle">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
            ['action' => 'delete', $subtestis->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $subtestis->id),
            'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Delete'), 'escape' => false]) ?>
        </li>

        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['action' => 'index'],
            ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Subtestes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Tipos', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Tipos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Tipos', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Tipo'), 'escape' => false]) ?>
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
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'SubtestesResultados', 'action' => 'index'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Resultados'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'SubtestesResultados', 'action' => 'add'],
            ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Resultado'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <?= $this->Form->create($subtestis) ?>
        <span class="card-title green-text"><?= __('Edit Subtestis') ?></span>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('tipo_id', ['options' => $tipos]) ?>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('teste_id', ['options' => $testes]) ?>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('resultado_id', ['options' => $resultados]) ?>
                </div>
            </div>
            <div class="col s12 m12 l12">
                <div class="input-field">
                    <?= $this->Form->control('conteudo', ['class' => 'materialize-textarea']) ?>
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
