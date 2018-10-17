<div class="fixed-action-btn click-to-toggle">
    <a class="btn-floating btn-large red tooltipped" data-tooltip="Clique para ver as opções" data-delay="0" data-position="left">
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
        <li>
            <?= $this->Html->link(
                '<i class="material-icons">list</i>',
                ['controller' => 'Categorias', 'action' => 'index'],
                [
                    'class' => 'btn-floating orange darken-1 tooltipped',
                    'data-tooltip'=>'Ver categorias cadastrados',
                    'data-delay'=>'0',
                    'data-position'=>'left',
                    'escape' => false,
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="material-icons">add</i>',
                ['controller' => 'Categorias', 'action' => 'add'],
                [
                    'class' => 'btn-floating orange darken-1 tooltipped',
                    'data-tooltip'=>'Cadastrar categoria',
                    'data-delay'=>'0',
                    'data-position'=>'left',
                    'escape' => false,
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="material-icons">list</i>',
                ['controller' => 'Testes', 'action' => 'index'],
                [
                    'class' => 'btn-floating orange darken-1 tooltipped',
                    'data-tooltip'=>'Ver testes cadastrados',
                    'data-delay'=>'0',
                    'data-position'=>'left',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="material-icons">add</i>',
                ['controller' => 'Testes', 'action' => 'add'],
                [
                    'class' => 'btn-floating orange darken-1 tooltipped',
                    'data-tooltip'=>'Cadastrar teste',
                    'data-delay'=>'0',
                    'data-position'=>'left',
                    'escape' => false
                ]
            ); ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><?= __('Artigos') ?></span>
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
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
                            '<i class="material-icons">zoom_in</i>',
                            ['action' => 'view', $artigo->id],
                            [
                                'escape' => false,
                                'class' => 'btn-floating waves-effect waves-light btn-small tooltipped',
                                'data-tooltip'=>__('Ver dados do artigo {0}', $artigo->id),
                                'data-delay'=>'0',
                                'data-position'=>'left',
                            ]
                        ); ?>
                        <?= $this->Html->link(
                            '<i class="material-icons">create</i>',
                            ['action' => 'edit', $artigo->id],
                            [
                                'escape' => false,
                                'class' => 'btn-floating waves-effect waves-light btn-small blue tooltipped',
                                'data-tooltip'=>__('Editar artigo {0}', $artigo->id),
                                'data-delay'=>'0',
                                'data-position'=>'top',
                            ]
                        ); ?>
                        <?= $this->Form->postLink(
                            '<i class="material-icons">delete</i>',
                            ['action' => 'delete', $artigo->id],
                            [
                                'confirm' => __('Você tem certeza que deseja apagar o artigo {0}?', $artigo->titulo),
                                'escape' => false,
                                'class' => 'btn-floating waves-effect waves-light btn-small red tooltipped',
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
<div class="center col s12">
    <ul class="pagination">
        <?= $this->Paginator->first('<i class="material-icons">first_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
        <?= $this->Paginator->prev('<i class="material-icons">chevron_left</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('<i class="material-icons">chevron_right</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
        <?= $this->Paginator->last('<i class="material-icons">last_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
    </ul>
</div>

<p class="right"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
