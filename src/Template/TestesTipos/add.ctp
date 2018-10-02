<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestesTipo $testesTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Testes Tipos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testesTipos form large-9 medium-8 columns content">
    <?= $this->Form->create($testesTipo) ?>
    <fieldset>
        <legend><?= __('Add Testes Tipo') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
