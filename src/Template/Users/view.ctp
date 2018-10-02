<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Testes'), ['controller' => 'Testes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testis'), ['controller' => 'Testes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Testes Listas'), ['controller' => 'TestesListas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testes Lista'), ['controller' => 'TestesListas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($user->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admin') ?></th>
            <td><?= $user->admin ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Testes') ?></h4>
        <?php if (!empty($user->testes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Lista Id') ?></th>
                <th scope="col"><?= __('Conteudo') ?></th>
                <th scope="col"><?= __('Tipo Id') ?></th>
                <th scope="col"><?= __('Resultado Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->testes as $testes): ?>
            <tr>
                <td><?= h($testes->id) ?></td>
                <td><?= h($testes->lista_id) ?></td>
                <td><?= h($testes->conteudo) ?></td>
                <td><?= h($testes->tipo_id) ?></td>
                <td><?= h($testes->resultado_id) ?></td>
                <td><?= h($testes->user_id) ?></td>
                <td><?= h($testes->created) ?></td>
                <td><?= h($testes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Testes', 'action' => 'view', $testes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Testes', 'action' => 'edit', $testes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Testes', 'action' => 'delete', $testes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Testes Listas') ?></h4>
        <?php if (!empty($user->testes_listas)): ?>
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
            <?php foreach ($user->testes_listas as $testesListas): ?>
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
