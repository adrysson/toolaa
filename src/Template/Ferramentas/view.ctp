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
<div class="card grey lighten-4 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><h5>Ferramenta: <?= h($ferramenta->nome) ?></h5></span>
        <div class="card">
            <table class="bordered responsive-table">
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
        </div>
        <?php if (!empty($ferramenta->testes)): ?>
            <div class="card black-text">
                <div class="card-content">
                    <div class="green-text"><h5>Testes da ferramenta</h5></div>
                    <div class="card">
                        <table class="striped responsive-table">
                            <thead>
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Artigo</th>
                                    <th scope="col">Usuário</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ferramenta->testes as $teste): ?>
                                    <tr>
                                        <td><?= h($teste->id) ?></td>
                                        <td><?= h($teste->artigo->titulo) ?></td>
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
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
