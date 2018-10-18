<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">mode_edit</i>',
                ['action' => 'edit', $teste->id],
                ['class' => 'btn-floating yellow tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Editar teste {0}', $teste->id), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $teste->id],
                ['confirm' =>__('Você tem certeza que deseja apagar o teste {0}?', $teste->titulo),
                'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Apagar teste {0}', $teste->id), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Ver testes cadastrados'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['action' => 'add'],
                ['class' => 'btn-floating green tooltipped', 'data-position' => 'left', 'data-delay' => '0', 'data-tooltip' =>  __('Cadastrar teste'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><h5>Teste: <?= h($teste->id) ?></h5></span>
        <div class="card">
            <table class="striped bordered responsive-table">
                <tbody>
                    <tr>
                        <td>Artigo</td>
                        <td><?= $this->Html->link($teste->artigo->titulo, ['controller' => 'Artigos', 'action' => 'view', $teste->artigo->id]) ?></td>
                    </tr>
                    <tr>
                        <td>Ferramenta</td>
                        <td><?= $this->Html->link($teste->ferramenta->nome, ['controller' => 'Ferramentas', 'action' => 'view', $teste->ferramenta->id]) ?></td>
                    </tr>
                    <tr>
                        <td>Usuário</td>
                        <td><?= $this->Html->link($teste->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $teste->usuario->id]) ?></td>
                    </tr>
                    <tr>
                        <td>Código</td>
                        <td><?= $this->Number->format($teste->id) ?></td>
                    </tr>
                    <tr>
                        <td>Criado em</td>
                        <td><?= h($teste->created->format('d/m/Y à\s H:i')) ?></td>
                    </tr>
                    <tr>
                        <td>Modificado em</td>
                        <td><?= h($teste->modified->format('d/m/Y à\s H:i')) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php if (!empty($teste->subtestes)): ?>
            <div class="black-text">
                <div class="green-text"><h5>Resultados</h5></div>
                    <div class="card">
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col">Tipo</th>
                                <th scope="col">Resultado</th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($teste->subtestes as $subteste): ?>
                                <tr>
                                    <td><?= h($subteste->tipo->nome) ?></td>
                                    <td><?= h($subteste->resultado->nome) ?></td>
                                    <td>
                                        <?= $this->Html->link(
                                            '<i class="material-icons tiny-custom black-text">zoom_in</i>',
                                            ['controller' => 'Subtestes', 'action' => 'view', $subteste->id],
                                            [
                                                'escape' => false,
                                                'class' => 'tooltipped',
                                                'data-tooltip' => __('Ver {0}', $subteste->tipo->nome),
                                                'data-delay'=>'0',
                                                'data-position'=>'left',
                                            ]
                                        ); ?>
                                        <?= $this->Html->link(
                                            '<i class="material-icons tiny-custom black-text">create</i>',
                                            ['controller' => 'Subtestes', 'action' => 'edit', $subteste->id],
                                            [
                                                'escape' => false,
                                                'class' => 'tooltipped',
                                                'data-tooltip' => __('Editar {0}', $subteste->tipo->nome),
                                                'data-delay'=>'0',
                                                'data-position'=>'top',
                                            ]
                                        ); ?>
                                        <?= $this->Form->postLink(
                                            '<i class="material-icons tiny-custom black-text">delete</i>',
                                            ['action' => 'delete', $subteste->id],
                                            [
                                                'escape' => false,
                                                'class' => 'tooltipped',
                                                'confirm' => __('Você tem certeza que deseja apagar {0} do teste {1}?', $subteste->tipo->nome, $teste->id),
                                                'data-tooltip' => __('Apagar {0}', $subteste->tipo->nome),
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
        <?php endif; ?>
    </div>
</div>
