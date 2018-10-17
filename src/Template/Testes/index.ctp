<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $testes
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
            ['class' => 'btn-floating green', 'title' => __('New Testis'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Artigos', 'action' => 'index'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('List Artigos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Artigos', 'action' => 'add'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('New Artigo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Ferramentas', 'action' => 'index'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('List Ferramentas'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Ferramentas', 'action' => 'add'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('New Ferramenta'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Usuarios', 'action' => 'index'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('List Usuarios'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Usuarios', 'action' => 'add'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('New Usuario'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Subtestes', 'action' => 'index'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('List Subtestes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Subtestes', 'action' => 'add'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('New Subtestis'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><?= __('Testes') ?></span>
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('artigo_id') ?></th>
                    <th><?= $this->Paginator->sort('ferramenta_id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($testes as $testis): ?>
                <tr>
                    <td><?= $this->Number->format($testis->id) ?></td>
                    <td><?= $testis->has('artigo') ? $this->Html->link($testis->artigo->id, ['controller' => 'Artigos', 'action' => 'view', $testis->artigo->id]) : '' ?></td>
                    <td><?= $testis->has('ferramenta') ? $this->Html->link($testis->ferramenta->id, ['controller' => 'Ferramentas', 'action' => 'view', $testis->ferramenta->id]) : '' ?></td>
                    <td><?= $testis->has('usuario') ? $this->Html->link($testis->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $testis->usuario->id]) : '' ?></td>
                    <td><?= h($testis->created) ?></td>
                    <td><?= h($testis->modified) ?></td>
                    <td>
                        <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $testis->id], ['escape' => false]) ?>
                        <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $testis->id], ['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="material-icons tiny-custom black-text" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $testis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testis->id), 'escape' => false]) ?>
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
