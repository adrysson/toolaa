<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link(
                '<i class="material-icons">add</i>',
                ['action' => 'add'],
                [
                    'class' => 'btn-floating green tooltipped',
                    'data-tooltip'=>'Cadastrar artigo',
                    'data-delay'=>'0',
                    'data-position'=>'left',
                    'escape' => false,
                ]
            ); ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><h5>Artigos</h5></span>
        <div class="card ">
            <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id', 'Código') ?></th>
                        <th><?= $this->Paginator->sort('titulo') ?></th>
                        <th><?= $this->Paginator->sort('categoria_id') ?></th>
                        <th><?= __('Ações') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($artigos as $artigo): ?>
                        <tr>
                            <td><?= $this->Number->format($artigo->id) ?></td>
                            <td><?= h($artigo->titulo) ?></td>
                            <td><?= $this->Html->link($artigo->categoria->nome, ['controller' => 'Categorias', 'action' => 'view', $artigo->categoria->id]) ?></td>
                            <td>
                                <?= $this->Html->link(
                                    '<i class="material-icons tiny-custom black-text">zoom_in</i>',
                                    ['action' => 'view', $artigo->id],
                                    [
                                        'escape' => false,
                                        'class' => 'tooltipped',
                                        'data-tooltip'=>__('Ver dados do artigo {0}', $artigo->id),
                                        'data-delay'=>'0',
                                        'data-position'=>'left',
                                    ]
                                ); ?>
                                <?= $this->Html->link(
                                    '<i class="material-icons tiny-custom black-text">create</i>',
                                    ['action' => 'edit', $artigo->id],
                                    [
                                        'escape' => false,
                                        'class' => 'tooltipped',
                                        'data-tooltip'=>__('Editar artigo {0}', $artigo->id),
                                        'data-delay'=>'0',
                                        'data-position'=>'top',
                                    ]
                                ); ?>
                                <?= $this->Form->postLink(
                                    '<i class="material-icons tiny-custom black-text">delete</i>',
                                    ['action' => 'delete', $artigo->id],
                                    [
                                        'confirm' => __('Você tem certeza que deseja apagar o artigo {0}?', $artigo->titulo),
                                        'escape' => false,
                                        'class' => 'tooltipped',
                                        'data-tooltip'=>__('Apagar artigo {0}', $artigo->id),
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
<div class="center col s12">
    <ul class="pagination">
        <?= $this->Paginator->first('<i class="material-icons">first_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
        <?= $this->Paginator->prev('<i class="material-icons">chevron_left</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('<i class="material-icons">chevron_right</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
        <?= $this->Paginator->last('<i class="material-icons">last_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
    </ul>
</div>

<p class="center"><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de um total de {{count}}, começando no registro {{start}}, terminando no registro {{end}}')]) ?></p>
