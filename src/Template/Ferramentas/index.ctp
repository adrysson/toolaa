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
                    'data-tooltip'=>'Cadastrar ferramenta',
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
        <span class="card-title green-text"><h5>Ferramentas</h5></span>
        <div class="card ">
            <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id', 'Código') ?></th>
                        <th><?= $this->Paginator->sort('nome') ?></th>
                        <th><?= __('Ações') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ferramentas as $ferramenta): ?>
                        <tr>
                            <td><?= $this->Number->format($ferramenta->id) ?></td>
                            <td><?= h($ferramenta->nome) ?></td>
                            <td>
                                <?= $this->Html->link(
                                    '<i class="material-icons tiny-custom black-text">zoom_in</i>',
                                    ['action' => 'view', $ferramenta->id],
                                    [
                                        'escape' => false,
                                        'class' => 'tooltipped',
                                        'data-tooltip'=>__('Ver dados da ferramenta {0}', $ferramenta->id),
                                        'data-delay'=>'0',
                                        'data-position'=>'left',
                                    ]
                                ); ?>
                                <?= $this->Html->link(
                                    '<i class="material-icons tiny-custom black-text">create</i>',
                                    ['action' => 'edit', $ferramenta->id],
                                    [
                                        'escape' => false,
                                        'class' => 'tooltipped',
                                        'data-tooltip'=>__('Editar ferramenta {0}', $ferramenta->id),
                                        'data-delay'=>'0',
                                        'data-position'=>'top',
                                    ]
                                ); ?>
                                <?= $this->Form->postLink(
                                    '<i class="material-icons tiny-custom black-text">delete</i>',
                                    ['action' => 'delete', $ferramenta->id],
                                    [
                                        'confirm' => __('Você tem certeza que deseja apagar o ferramenta {0}?', $ferramenta->nome),
                                        'escape' => false,
                                        'class' => 'tooltipped',
                                        'data-tooltip'=>__('Apagar ferramenta {0}', $ferramenta->id),
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
