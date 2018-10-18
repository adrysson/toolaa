<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">mode_edit</i>',
                ['action' => 'edit', $ferramenta->id],
                ['class' => 'btn-floating yellow tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Editar ferramenta {0}', $ferramenta->id), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $ferramenta->id],
                ['confirm' =>__('Você tem certeza que deseja apagar a ferramenta {0}?', $ferramenta->titulo),
                'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Apagar ferramenta {0}', $ferramenta->id), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Ver ferramentas cadastradas'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['action' => 'add'],
                ['class' => 'btn-floating green tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Cadastrar ferramenta'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text">Ferramenta: <?= h($ferramenta->nome) ?></span>
        <table class="striped bordered responsive-table">
            <tbody>
                <tr>
                    <td>Nome</td>
                    <td><?= h($ferramenta->nome) ?></td>
                </tr>
                <tr>
                    <td>Código</td>
                    <td><?= $this->Number->format($ferramenta->id) ?></td>
                </tr>
            </tbody>
        </table>
        <?php if (!empty($ferramenta->testes)): ?>
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
                    <?php foreach ($ferramenta->testes as $testes): ?>
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
