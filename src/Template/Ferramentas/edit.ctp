<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ferramenta $ferramenta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ferramenta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ferramenta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ferramentas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Testes Listas'), ['controller' => 'TestesListas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Testes Lista'), ['controller' => 'TestesListas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ferramentas form large-9 medium-8 columns content">
    <?= $this->Form->create($ferramenta) ?>
    <fieldset>
        <legend><?= __('Edit Ferramenta') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
