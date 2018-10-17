<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
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
            ['class' => 'btn-floating green', 'title' => __('New Usuario'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Grupos', 'action' => 'index'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('List Grupos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Grupos', 'action' => 'add'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('New Grupo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
            ['controller' => 'Perfis', 'action' => 'index'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('List Perfis'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['controller' => 'Perfis', 'action' => 'add'],
            ['class' => 'btn-floating orange darken-1', 'title' => __('New Perfi'), 'escape' => false]) ?>
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
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><?= __('Usuarios') ?></span>
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('senha') ?></th>
                    <th><?= $this->Paginator->sort('grupo_id') ?></th>
                    <th><?= $this->Paginator->sort('perfil_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                    <td><?= h($usuario->nome) ?></td>
                    <td><?= h($usuario->email) ?></td>
                    <td><?= h($usuario->senha) ?></td>
                    <td><?= $usuario->has('grupo') ? $this->Html->link($usuario->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $usuario->grupo->id]) : '' ?></td>
                    <td><?= $usuario->has('perfil') ? $this->Html->link($usuario->perfil->id, ['controller' => 'Perfis', 'action' => 'view', $usuario->perfil->id]) : '' ?></td>
                    <td><?= h($usuario->created) ?></td>
                    <td><?= h($usuario->modified) ?></td>
                    <td>
                        <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $usuario->id], ['escape' => false]) ?>
                        <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $usuario->id], ['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="material-icons tiny-custom black-text" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'escape' => false]) ?>
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
