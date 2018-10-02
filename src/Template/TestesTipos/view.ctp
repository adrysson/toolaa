<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestesTipo $testesTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testes Tipo'), ['action' => 'edit', $testesTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testes Tipo'), ['action' => 'delete', $testesTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testesTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testes Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testes Tipo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testesTipos view large-9 medium-8 columns content">
    <h3><?= h($testesTipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($testesTipo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testesTipo->id) ?></td>
        </tr>
    </table>
</div>
