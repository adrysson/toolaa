<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">mode_edit</i>',
                ['action' => 'edit', $artigo->id],
                ['class' => 'btn-floating yellow tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Editar artigo {0}', $artigo->id), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $artigo->id],
                ['confirm' =>__('Você tem certeza que deseja apagar o artigo {0}?', $artigo->titulo),
                'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Apagar artigo {0}', $artigo->id), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Ver artigos cadastrados'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['action' => 'add'],
                ['class' => 'btn-floating green tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Cadastrar artigo'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card grey lighten-4 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><h5>Artigo: <?= h($artigo->titulo) ?></h5></span>
        <div class="card">
            <table class="bordered responsive-table">
                <tbody>
                    <tr>
                        <td>Titulo</td>
                        <td><?= h($artigo->titulo) ?></td>
                    </tr>
                    <tr>
                        <td>Categoria</td>
                        <td>
                            <?= $this->Html->link($artigo->categoria->nome, ['controller' => 'Categorias', 'action' => 'view', $artigo->categoria->id]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Código</td>
                        <td>
                            <?= $this->Number->format($artigo->id) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php if (!empty($artigo->testes)): ?>
            <div class="black-text">
                <div class="card">
                    <div class="card-content">
                        <div class="green-text card-title"><h5>Testes do artigo</h5></div>
                        <div class="card">
                            <table class="striped responsive-table">
                                <thead>
                                    <tr>
                                        <th scope="col"><?= __('Código') ?></th>
                                        <th scope="col"><?= __('Ferramenta') ?></th>
                                        <th scope="col"><?= __('Usuário') ?></th>
                                        <th><?= __('Ações') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($artigo->testes as $teste): ?>
                                        <tr>
                                            <td><?= h($teste->id) ?></td>
                                            <td><?= h($teste->ferramenta->nome) ?></td>
                                            <td><?= h($teste->usuario->nome) ?></td>
                                            <td>
                                                <?= $this->Html->link(
                                                    '<i class="material-icons tiny-custom black-text">zoom_in</i>',
                                                    ['controller' => 'Testes', 'action' => 'view', $teste->id],
                                                    [
                                                        'escape' => false,
                                                        'class' => 'tooltipped',
                                                        'data-tooltip'=>__('Ver dados do teste {0}', $teste->id),
                                                        'data-delay'=>'0',
                                                        'data-position'=>'left',
                                                    ]
                                                ); ?>
                                                <?= $this->Html->link(
                                                    '<i class="material-icons tiny-custom black-text">create</i>',
                                                    ['controller' => 'Testes', 'action' => 'edit', $teste->id],
                                                    [
                                                        'escape' => false,
                                                        'class' => 'tooltipped',
                                                        'data-tooltip'=>__('Editar teste {0}', $teste->id),
                                                        'data-delay'=>'0',
                                                        'data-position'=>'top',
                                                    ]
                                                ); ?>
                                                <?= $this->Form->postLink(
                                                    '<i class="material-icons tiny-custom black-text">delete</i>',
                                                    ['controller' => 'Testes', 'action' => 'delete', $teste->id],
                                                    [
                                                        'confirm' => __('Você tem certeza que deseja apagar o teste {0}?', $teste->id),
                                                        'escape' => false,
                                                        'class' => 'tooltipped',
                                                        'data-tooltip'=>__('Apagar teste {0}', $teste->id),
                                                        'data-delay'=>'0',
                                                        'data-position'=>'right',
                                                    ]
                                                ); ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
