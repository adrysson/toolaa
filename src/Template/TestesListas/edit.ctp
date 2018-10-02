<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestesLista $testesLista
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $testesLista->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $testesLista->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Testes Listas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Artigos'), ['controller' => 'Artigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artigo'), ['controller' => 'Artigos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ferramentas'), ['controller' => 'Ferramentas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ferramenta'), ['controller' => 'Ferramentas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="testesListas form large-9 medium-8 columns content">
    <?= $this->Form->create($testesLista) ?>
    <fieldset>
        <legend><?= __('Edit Testes Lista') ?></legend>
        <?php
            echo $this->Form->control('artigo_id', ['options' => $artigos]);
            echo $this->Form->control('ferramenta_id', ['options' => $ferramentas]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
