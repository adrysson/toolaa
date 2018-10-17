<?php
/**
* @var \App\View\AppView $this
* @var \Cake\Datasource\EntityInterface $testis
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
                ['action' => 'edit', $testis->id],
                ['class' => 'btn-floating yellow tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Edit Testis'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $testis->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $testis->id),
                'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Delete Testis'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Testes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['action' => 'add'],
                ['class' => 'btn-floating green tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Testis'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['controller' => 'Artigos', 'action' => 'index'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Artigos'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['controller' => 'Artigos', 'action' => 'add'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Artigo'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['controller' => 'Ferramentas', 'action' => 'index'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Ferramentas'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['controller' => 'Ferramentas', 'action' => 'add'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Ferramenta'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['controller' => 'Usuarios', 'action' => 'index'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Usuarios'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['controller' => 'Usuarios', 'action' => 'add'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Usuario'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['controller' => 'Subtestes', 'action' => 'index'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('List Subtestes'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['controller' => 'Subtestes', 'action' => 'add'],
                ['class' => 'btn-floating orange tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('New Subtestis'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><?= h($testis->id) ?></span>
        <table class="striped bordered responsive-table">
            <tbody>
                <tr>
                    <td>
                        <?= __('Artigo Id') ?>
                    </td>
                    <td class="right">
                        <?= $testis->has('artigo') ? $this->Html->link($testis->artigo->id, ['controller' => 'Artigos', 'action' => 'view', $testis->artigo->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Ferramenta Id') ?>
                    </td>
                    <td class="right">
                        <?= $testis->has('ferramenta') ? $this->Html->link($testis->ferramenta->id, ['controller' => 'Ferramentas', 'action' => 'view', $testis->ferramenta->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Usuario Id') ?>
                    </td>
                    <td class="right">
                        <?= $testis->has('usuario') ? $this->Html->link($testis->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $testis->usuario->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Id') ?>
                    </td>
                    <td class="right">
                        <?= $this->Number->format($testis->id) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Created') ?>
                    </td>
                    <td class="right">
                        <?= h($testis->created->format('d/m/Y H:i')) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= __('Modified') ?>
                    </td>
                    <td class="right">
                        <?= h($testis->modified->format('d/m/Y H:i')) ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php if (!empty($testis->subtestes)): ?>
            <div class="card-content black-text">
                <div class="green-text"><h5><?= __('Related Subtestes') ?></h5></div>
                <div class="collapsible-header"></div>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Tipo Id') ?></th>
                            <th scope="col"><?= __('Teste Id') ?></th>
                            <th scope="col"><?= __('Resultado Id') ?></th>
                            <th scope="col"><?= __('Conteudo') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($testis->subtestes as $subtestes): ?>
                        <tr>
                            <td><?= h($subtestes->id) ?></td>
                            <td><?= h($subtestes->tipo_id) ?></td>
                            <td><?= h($subtestes->teste_id) ?></td>
                            <td><?= h($subtestes->resultado_id) ?></td>
                            <td><?= h($subtestes->conteudo) ?></td>
                            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                            <td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'Subtestes', 'action' => 'view', $subtestes->id]) ?>
                                <?= $this->Html->link('<i class="material-icons tiny-custom black-text" title="'. __('Edit') . '" >create</i>', ['controller' => 'Subtestes', 'action' => 'edit', $subtestes->id]) ?>
                                <?= $this->Form->postLink('<i class="material-icons tiny-custom black-text" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $subtestes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtestes->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
