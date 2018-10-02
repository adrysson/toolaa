<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testis $testis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $testis->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $testis->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Testes'), ['action' => 'index']) ?></li>
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
<div class="testes form large-9 medium-8 columns content">
    <?= $this->Form->create($testis) ?>
    <fieldset>
        <legend><?= __('Edit Testis') ?></legend>
        <?php
            echo $this->Form->control('lista_id', ['options' => $testesListas]);
            echo $this->Form->control('conteudo');
            echo $this->Form->control('tipo_id', ['options' => $testesTipos]);
            echo $this->Form->control('resultado_id', ['options' => $testesResultados]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
