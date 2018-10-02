<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestesResultado $testesResultado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Testes Resultados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testesResultados form large-9 medium-8 columns content">
    <?= $this->Form->create($testesResultado) ?>
    <fieldset>
        <legend><?= __('Add Testes Resultado') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
