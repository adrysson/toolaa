<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testis[]|\Cake\Collection\CollectionInterface $testes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Testis'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Testes Listas'), ['controller' => 'TestesListas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Testes Lista'), ['controller' => 'TestesListas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Testes Tipos'), ['controller' => 'TestesTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Testes Tipo'), ['controller' => 'TestesTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Testes Resultados'), ['controller' => 'TestesResultados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Testes Resultado'), ['controller' => 'TestesResultados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="testes index large-9 medium-8 columns content">
    <h3><?= __('Testes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lista_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resultado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testes as $testis): ?>
            <tr>
                <td><?= $this->Number->format($testis->id) ?></td>
                <td><?= $testis->has('testes_lista') ? $this->Html->link($testis->testes_lista->id, ['controller' => 'TestesListas', 'action' => 'view', $testis->testes_lista->id]) : '' ?></td>
                <td><?= $testis->has('testes_tipo') ? $this->Html->link($testis->testes_tipo->id, ['controller' => 'TestesTipos', 'action' => 'view', $testis->testes_tipo->id]) : '' ?></td>
                <td><?= $testis->has('testes_resultado') ? $this->Html->link($testis->testes_resultado->id, ['controller' => 'TestesResultados', 'action' => 'view', $testis->testes_resultado->id]) : '' ?></td>
                <td><?= $testis->has('user') ? $this->Html->link($testis->user->id, ['controller' => 'Users', 'action' => 'view', $testis->user->id]) : '' ?></td>
                <td><?= h($testis->created) ?></td>
                <td><?= h($testis->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $testis->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $testis->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $testis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testis->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
