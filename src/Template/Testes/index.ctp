<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
            ['action' => 'add'],
            [
                'class' => 'btn-floating green tooltipped',
                'escape' => false,
                'data-tooltip' => 'Cadastrar teste',
                'data-delay'=>'0',
                'data-position'=>'left',
            ]); ?>
        </li>
    </ul>
</div>
<div class="card darken-1 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><h5>Testes</h5></span>
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', 'Código') ?></th>
                    <th><?= $this->Paginator->sort('artigo.nome', 'Artigo') ?></th>
                    <th><?= $this->Paginator->sort('ferramenta.nome', 'Ferramenta') ?></th>
                    <th><?= $this->Paginator->sort('usuario.nome', 'Usuário') ?></th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($testes as $teste): ?>
                <tr>
                    <td><?= $this->Number->format($teste->id) ?></td>
                    <td><?= $this->Html->link($teste->artigo->titulo, ['controller' => 'Artigos', 'action' => 'view', $teste->artigo->id]) ?></td>
                    <td><?= $this->Html->link($teste->ferramenta->nome, ['controller' => 'Ferramentas', 'action' => 'view', $teste->ferramenta->id]) ?></td>
                    <td><?= $this->Html->link($teste->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $teste->usuario->id]) ?></td>
                    <td>
                        <?= $this->Html->link(
                            '<i class="material-icons tiny-custom black-text">zoom_in</i>',
                            ['action' => 'view', $teste->id],
                            [
                                'escape' => false,
                                'class' => 'tooltipped',
                                'data-tooltip'=>__('Ver dados do teste {0}', $teste->id),
                                'data-delay'=>'0',
                                'data-position'=>'left',
                            ]); ?>
                        <?= $this->Html->link(
                            '<i class="material-icons tiny-custom black-text">create</i>',
                            ['action' => 'edit', $teste->id],
                            [
                                'escape' => false,
                                'class' => 'tooltipped',
                                'data-tooltip'=>__('Editar teste {0}', $teste->id),
                                'data-delay'=>'0',
                                'data-position'=>'top',
                            ]); ?>
                        <?= $this->Form->postLink(
                            '<i class="material-icons tiny-custom black-text">delete</i>',
                            ['action' => 'delete', $teste->id],
                            [
                                'confirm' => __('Você tem certeza que deseja apagar o teste {0}?', $teste->id),
                                'escape' => false,
                                'class' => 'tooltipped',
                                'data-tooltip'=>__('Apagar teste {0}', $teste->id),
                                'data-delay'=>'0',
                                'data-position'=>'right',
                            ]); ?>
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

<p class="center"><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de um total de {{count}}, começando no registro {{start}}, terminando no registro {{end}}')]) ?></p>
