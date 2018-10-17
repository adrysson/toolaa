<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Usuario $usuario
*/
$this->layout = "Materialize.materialize";

?>
<div class="fixed-action-btn click-to-toggle">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">mode_edit</i>',
                ['action' => 'edit', $usuario->id],
                ['class' => 'btn-floating yellow tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Edit Usuario'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id),
                'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Delete Usuario'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Usuarios'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['action' => 'add'],
                ['class' => 'btn-floating green tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Usuario'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['controller' => 'Grupos', 'action' => 'index'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Grupos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['controller' => 'Grupos', 'action' => 'add'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Grupo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['controller' => 'Perfis', 'action' => 'index'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Perfis'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['controller' => 'Perfis', 'action' => 'add'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Perfi'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['controller' => 'Testes', 'action' => 'index'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Testes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['controller' => 'Testes', 'action' => 'add'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Testis'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><?= h($usuario->id) ?></span>
        <table class="striped bordered responsive-table">
            <tbody>
                <tr>
                    <td>
                        <?= __('Nome') ?>
                    </td>
                    <td class="right">
                        <?= h($usuario->nome) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Email') ?>
                    </td>
                    <td class="right">
                        <?= h($usuario->email) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Senha') ?>
                    </td>
                    <td class="right">
                        <?= h($usuario->senha) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Grupo Id') ?>
                    </td>
                    <td class="right">
                        <?= $usuario->has('grupo') ? $this->Html->link($usuario->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $usuario->grupo->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Perfil Id') ?>
                    </td>
                    <td class="right">
                        <?= $usuario->has('perfil') ? $this->Html->link($usuario->perfil->id, ['controller' => 'Perfis', 'action' => 'view', $usuario->perfil->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Id') ?>
                    </td>
                    <td class="right">
                        <?= $this->Number->format($usuario->id) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Created') ?>
                    </td>
                    <td class="right">
                        <?= h($usuario->created->format('d/m/Y H:i')) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Modified') ?>
                    </td>
                    <td class="right">
                        <?= h($usuario->modified->format('d/m/Y H:i')) ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php if (!empty($usuario->testes)): ?>
            <div class="card-content black-text">
                <div class="green-text"><h5><?= __('Related Testes') ?></h5></div>
                <div class="collapsible-header"></div>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Artigo Id') ?></th>
                            <th scope="col"><?= __('Ferramenta Id') ?></th>
                            <th scope="col"><?= __('Usuario Id') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($usuario->testes as $testes): ?>
                        <tr>
                            <td><?= h($testes->id) ?></td>
                            <td><?= h($testes->artigo_id) ?></td>
                            <td><?= h($testes->ferramenta_id) ?></td>
                            <td><?= h($testes->usuario_id) ?></td>
                            <td><?= h($testes->created) ?></td>
                            <td><?= h($testes->modified) ?></td>
                            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                            <td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'Testes', 'action' => 'view', $testes->id]) ?>
                                <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('Edit') . '" >create</i>', ['controller' => 'Testes', 'action' => 'edit', $testes->id]) ?>
                                <?= $this->Form->postLink('<i class="material-icons tiny-custom black-text" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $testes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testes->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
