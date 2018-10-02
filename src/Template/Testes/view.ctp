<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testis $testis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testis'), ['action' => 'edit', $testis->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testis'), ['action' => 'delete', $testis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testis->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testis'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Testes Listas'), ['controller' => 'TestesListas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testes Lista'), ['controller' => 'TestesListas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Testes Tipos'), ['controller' => 'TestesTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testes Tipo'), ['controller' => 'TestesTipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Testes Resultados'), ['controller' => 'TestesResultados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testes Resultado'), ['controller' => 'TestesResultados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testes view large-9 medium-8 columns content">
    <h3><?= h($testis->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Testes Lista') ?></th>
            <td><?= $testis->has('testes_lista') ? $this->Html->link($testis->testes_lista->id, ['controller' => 'TestesListas', 'action' => 'view', $testis->testes_lista->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Testes Tipo') ?></th>
            <td><?= $testis->has('testes_tipo') ? $this->Html->link($testis->testes_tipo->id, ['controller' => 'TestesTipos', 'action' => 'view', $testis->testes_tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Testes Resultado') ?></th>
            <td><?= $testis->has('testes_resultado') ? $this->Html->link($testis->testes_resultado->id, ['controller' => 'TestesResultados', 'action' => 'view', $testis->testes_resultado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $testis->has('user') ? $this->Html->link($testis->user->id, ['controller' => 'Users', 'action' => 'view', $testis->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testis->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($testis->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($testis->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Conteudo') ?></h4>
        <?= $this->Text->autoParagraph(h($testis->conteudo)); ?>
    </div>
</div>
