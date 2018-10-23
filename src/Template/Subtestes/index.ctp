<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $subtestes
 */

 $this->layout = "Materialize.materialize";

?>
<div class="fixed-action-btn click-to-toggle">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['action' => 'add'],
            ['class' => 'btn-floating green', 'title' => __('New Subtestis'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Tipos', 'action' => 'index'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('List Tipos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Tipos', 'action' => 'add'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('New Tipo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Testes', 'action' => 'index'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('List Testes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Testes', 'action' => 'add'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('New Testis'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'SubtestesResultados', 'action' => 'index'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('List Resultados'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'SubtestesResultados', 'action' => 'add'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('New Resultado'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><?= __('Subtestes') ?></span>
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo_id') ?></th>
                    <th><?= $this->Paginator->sort('teste_id') ?></th>
                    <th><?= $this->Paginator->sort('resultado_id') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($subtestes as $subtestis): ?>
                <tr>
                    <td><?= $this->Number->format($subtestis->id) ?></td>
                    <td><?= $subtestis->has('tipo') ? $this->Html->link($subtestis->tipo->id, ['controller' => 'Tipos', 'action' => 'view', $subtestis->tipo->id]) : '' ?></td>
                    <td><?= $subtestis->has('testis') ? $this->Html->link($subtestis->testis->id, ['controller' => 'Testes', 'action' => 'view', $subtestis->testis->id]) : '' ?></td>
                    <td><?= $subtestis->has('resultado') ? $this->Html->link($subtestis->resultado->id, ['controller' => 'SubtestesResultados', 'action' => 'view', $subtestis->resultado->id]) : '' ?></td>
                    <td>
                        <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $subtestis->id], ['escape' => false]) ?>
                        <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $subtestis->id], ['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="material-icons tiny-custom black-text" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $subtestis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtestis->id), 'escape' => false]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="center col s12">
    <ul class="pagination">
        <?= $this->Paginator->first('<i class="material-icons">first_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
        <?= $this->Paginator->prev('<i class="material-icons">chevron_left</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('<i class="material-icons">chevron_right</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
        <?= $this->Paginator->last('<i class="material-icons">last_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
    </ul>
</div>

<p class="right"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
