<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestesTipo[]|\Cake\Collection\CollectionInterface $testesTipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Testes Tipo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="testesTipos index large-9 medium-8 columns content">
    <h3><?= __('Testes Tipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testesTipos as $testesTipo): ?>
            <tr>
                <td><?= $this->Number->format($testesTipo->id) ?></td>
                <td><?= h($testesTipo->nome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $testesTipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $testesTipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $testesTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testesTipo->id)]) ?>
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
