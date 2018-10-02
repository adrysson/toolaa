<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestesResultado $testesResultado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testes Resultado'), ['action' => 'edit', $testesResultado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testes Resultado'), ['action' => 'delete', $testesResultado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testesResultado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testes Resultados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testes Resultado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testesResultados view large-9 medium-8 columns content">
    <h3><?= h($testesResultado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($testesResultado->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testesResultado->id) ?></td>
        </tr>
    </table>
</div>
