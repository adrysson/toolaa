<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestesLista $testesLista
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testes Lista'), ['action' => 'edit', $testesLista->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testes Lista'), ['action' => 'delete', $testesLista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testesLista->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testes Listas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testes Lista'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artigos'), ['controller' => 'Artigos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artigo'), ['controller' => 'Artigos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ferramentas'), ['controller' => 'Ferramentas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ferramenta'), ['controller' => 'Ferramentas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testesListas view large-9 medium-8 columns content">
    <h3><?= h($testesLista->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Artigo') ?></th>
            <td><?= $testesLista->has('artigo') ? $this->Html->link($testesLista->artigo->id, ['controller' => 'Artigos', 'action' => 'view', $testesLista->artigo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ferramenta') ?></th>
            <td><?= $testesLista->has('ferramenta') ? $this->Html->link($testesLista->ferramenta->id, ['controller' => 'Ferramentas', 'action' => 'view', $testesLista->ferramenta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $testesLista->has('user') ? $this->Html->link($testesLista->user->id, ['controller' => 'Users', 'action' => 'view', $testesLista->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testesLista->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($testesLista->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($testesLista->modified) ?></td>
        </tr>
    </table>
</div>
