<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ferramenta $ferramenta
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
            ['action' => 'delete', $ferramenta->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $ferramenta->id),
            'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Delete'), 'escape' => false]) ?>
        </li>

        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['action' => 'index'],
            ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Ferramentas'), 'escape' => false]) ?>
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
        <?= $this->Form->create($ferramenta) ?>
        <span class="card-title green-text"><?= __('Edit Ferramenta') ?></span>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <?= $this->Form->control('nome') ?>
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
