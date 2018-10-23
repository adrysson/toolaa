<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li>
            <?= $this->Html->link('<i class="material-icons">mode_edit</i>',
                ['action' => 'edit', $subteste->id],
                ['class' => 'btn-floating yellow tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Editar Subteste'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $subteste->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subteste->id),
                'class' => 'btn-floating red tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Apagar Subteste'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['class' => 'btn-floating blue tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Ver Subtestes cadastrados'), 'escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link('<i class="material-icons">add</i>',
                ['action' => 'add'],
                ['class' => 'btn-floating green tooltipped', 'data-position' => 'left', 'data-tooltip' =>  __('Cadastrar Subteste'), 'escape' => false]) ?>
        </li>
    </ul>
</div>
<div class="card grey lighten-4 col s12 m10 offset-m2">
    <div class="card-content black-text">
        <span class="card-title green-text"><h5><?= h($subteste->id) ?></h5></span>
        <div class="card">
            <table class="bordered responsive-table">
                <tbody>
                    <tr>
                        <td>Tipo</td>
                        <td>
                            <?= $subteste->has('tipo') ? $this->Html->link($subteste->tipo->nome, ['controller' => 'Tipos', 'action' => 'view', $subteste->tipo->id]) : '' ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Teste</td>
                        <td>
                            <?= $subteste->has('teste') ? $this->Html->link($subteste->teste->id, ['controller' => 'Testes', 'action' => 'view', $subteste->teste->id]) : '' ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Resultado</td>
                        <td>
                            <?= $subteste->has('resultado') ? $this->Html->link($subteste->resultado->nome, ['controller' => 'SubtestesResultados', 'action' => 'view', $subteste->resultado->id]) : '' ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Id</td>
                        <td>
                            <?= $this->Number->format($subteste->id) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Conteudo</td>
                        <td>
                            <?= $this->Text->autoParagraph(h($subteste->conteudo)); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
