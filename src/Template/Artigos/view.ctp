<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artigo $artigo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Artigo'), ['action' => 'edit', $artigo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artigo'), ['action' => 'delete', $artigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artigos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artigo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Testes Listas'), ['controller' => 'TestesListas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testes Lista'), ['controller' => 'TestesListas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="artigos view large-9 medium-8 columns content">
    <h3><?= h($artigo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($artigo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($artigo->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Testes Listas') ?></h4>
        <?php if (!empty($artigo->testes_listas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Artigo Id') ?></th>
                <th scope="col"><?= __('Ferramenta Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($artigo->testes_listas as $testesListas): ?>
            <tr>
                <td><?= h($testesListas->id) ?></td>
                <td><?= h($testesListas->artigo_id) ?></td>
                <td><?= h($testesListas->ferramenta_id) ?></td>
                <td><?= h($testesListas->user_id) ?></td>
                <td><?= h($testesListas->created) ?></td>
                <td><?= h($testesListas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TestesListas', 'action' => 'view', $testesListas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TestesListas', 'action' => 'edit', $testesListas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TestesListas', 'action' => 'delete', $testesListas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testesListas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
