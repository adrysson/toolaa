<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Artigo $artigo
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
                ['action' => 'edit', $artigo->id],
                ['class' => 'btn-floating yellow tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Edit Artigo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $artigo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id),
                'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Delete Artigo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Artigos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['action' => 'add'],
                ['class' => 'btn-floating green tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Artigo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['controller' => 'Categorias', 'action' => 'index'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Categorias'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['controller' => 'Categorias', 'action' => 'add'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Categoria'), 'escape' => false]) ?>
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
        <span class="card-title green-text"><?= h($artigo->id) ?></span>
        <table class="striped bordered responsive-table">
            <tbody>
                <tr>
                    <td>
                        <?= __('Titulo') ?>
                    </td>
                    <td class="right">
                        <?= h($artigo->titulo) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Categoria Id') ?>
                    </td>
                    <td class="right">
                        <?= $artigo->has('categoria') ? $this->Html->link($artigo->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $artigo->categoria->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Id') ?>
                    </td>
                    <td class="right">
                        <?= $this->Number->format($artigo->id) ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php if (!empty($artigo->testes)): ?>
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
                    <?php foreach ($artigo->testes as $testes): ?>
                        <tr>
                            <td><?= h($testes->id) ?></td>
                            <td><?= h($testes->artigo_id) ?></td>
                            <td><?= h($testes->ferramenta_id) ?></td>
                            <td><?= h($testes->usuario_id) ?></td>
                            <td><?= h($testes->created) ?></td>
                            <td><?= h($testes->modified) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'Testes', 'action' => 'view', $testes->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('Edit') . '" >create</i>', ['controller' => 'Testes', 'action' => 'edit', $testes->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons tiny-custom black-text" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $testes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testes->id), 'escape'=>false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>