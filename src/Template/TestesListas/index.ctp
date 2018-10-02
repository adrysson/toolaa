<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestesLista[]|\Cake\Collection\CollectionInterface $testesListas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Testes Lista'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Artigos'), ['controller' => 'Artigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artigo'), ['controller' => 'Artigos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ferramentas'), ['controller' => 'Ferramentas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ferramenta'), ['controller' => 'Ferramentas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="testesListas index large-9 medium-8 columns content">
    <h3><?= __('Testes Listas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('artigo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ferramenta_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testesListas as $testesLista): ?>
            <tr>
                <td><?= $this->Number->format($testesLista->id) ?></td>
                <td><?= $testesLista->has('artigo') ? $this->Html->link($testesLista->artigo->id, ['controller' => 'Artigos', 'action' => 'view', $testesLista->artigo->id]) : '' ?></td>
                <td><?= $testesLista->has('ferramenta') ? $this->Html->link($testesLista->ferramenta->id, ['controller' => 'Ferramentas', 'action' => 'view', $testesLista->ferramenta->id]) : '' ?></td>
                <td><?= $testesLista->has('user') ? $this->Html->link($testesLista->user->id, ['controller' => 'Users', 'action' => 'view', $testesLista->user->id]) : '' ?></td>
                <td><?= h($testesLista->created) ?></td>
                <td><?= h($testesLista->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $testesLista->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $testesLista->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $testesLista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testesLista->id)]) ?>
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
