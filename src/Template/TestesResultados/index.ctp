<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestesResultado[]|\Cake\Collection\CollectionInterface $testesResultados
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Testes Resultado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="testesResultados index large-9 medium-8 columns content">
    <h3><?= __('Testes Resultados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testesResultados as $testesResultado): ?>
            <tr>
                <td><?= $this->Number->format($testesResultado->id) ?></td>
                <td><?= h($testesResultado->nome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $testesResultado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $testesResultado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $testesResultado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testesResultado->id)]) ?>
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
