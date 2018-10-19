<?= $this->Form->create($teste) ?>
<span class="card-title green-text"><h5><?= $tipo ?> teste</h5></span>
<div class="row">

    <!-- Inputs de adição/listagem de ferramentas -->
    <div class="col s10 m3 l3" id="container-ferramenta">
        <?php if (!$ferramentas->isEmpty()): ?>
            <div class="input-field" id="input-ferramenta-id">
                <?= $this->Form->control('ferramenta_id', ['options' => $ferramentas]) ?>
            </div>
        <?php endif; ?>
        <div class="input-field" id="input-ferramenta-nome">
            <?= $this->Form->control('ferramenta.nome', ['label' => 'Ferramenta']) ?>
        </div>
    </div>

    <!-- Botões de adição/listagem de ferramentas -->
    <div class="col s1 m1 l1">
        <a href="javascript:;" class="btn-floating green tooltipped" id="add-ferramenta" data-delay="0" data-tooltip="Inserir ferramenta não listada" onclick="addFerramenta()" style="display:none">
            <i class="material-icons">add</i>
        </a>
        <a href="javascript:;" class="btn-floating teal tooltipped" id="list-ferramentas" data-delay="0" data-tooltip="Listar ferramentas novamente" onclick="listFerramentas()" style="display:none">
            <i class="material-icons">refresh</i>
        </a>
    </div>

    <!-- Inputs de adição/listagem de artigos-->
    <div class="col s10 m3 l3" id="container-artigo">
        <?php if (!$artigos->isEmpty()): ?>
            <div class="input-field" id="input-artigo-id">
                <?= $this->Form->control('artigo_id', ['options' => $artigos]) ?>
            </div>
        <?php endif; ?>
        <div class="input-field" id="input-artigo-nome">
            <?= $this->Form->control('artigo.titulo', ['label' => 'Artigo']) ?>
        </div>
    </div>

    <!-- Botões de adição/listagem de artigos e categorias de artigos -->
    <div class="col s1 m1 l1">
        <a href="javascript:;" class="btn-floating green tooltipped" id="add-artigo" data-delay="0" data-tooltip="Inserir artigo não listado" onclick="addArtigo()" style="display:none">
            <i class="material-icons">add</i>
        </a>
        <a href="javascript:;" class="btn-floating teal tooltipped" id="list-artigos" data-delay="0" data-tooltip="Listar artigos novamente" onclick="listArtigos()" style="display:none">
            <i class="material-icons">refresh</i>
        </a>
    </div>

    <!-- Inputs de adição/listagem de categorias de artigos -->
    <div class="col s10 m3 l3" id="container-artigo-categoria">
        <?php if (!$categorias->isEmpty()): ?>
            <div class="input-field" id="input-artigo-categoria-id">
                <?= $this->Form->control('artigo.categoria_id', ['options' => $categorias, 'label' => 'Categoria do artigo']) ?>
            </div>
        <?php endif ?>
        <div class="input-field" id="input-artigo-categoria-nome">
            <?= $this->Form->control('artigo.categoria.nome', ['label' => 'Categoria do artigo']) ?>
        </div>
    </div>

    <!-- Botões de adição/listagem de artigos e categorias de artigos -->
    <div class="col s1 m1 l1">
        <a href="javascript:;" class="btn-floating green tooltipped" id="add-artigo-categoria" data-delay="0" data-tooltip="Inserir categoria não listada" onclick="addArtigoCategoria()" style="display:none">
            <i class="material-icons">add</i>
        </a>
        <a href="javascript:;" class="btn-floating teal tooltipped" id="list-artigos-categorias" data-delay="0" data-tooltip="Listar categorias novamente" onclick="listArtigosCategorias()" style="display:none">
            <i class="material-icons">refresh</i>
        </a>
    </div>

    <?= $this->Form->control('usuario_id', ['value' => $this->request->getSession()->read('Auth.User.id'), 'type' => 'hidden']) ?>

</div>
<div class="row">
    <div class="black-text">
        <div class="card teal lighten-5">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="green-text card-title">Título</div>
                        <?= $this->Form->control('subtestes.0.tipo_id', ['value' => 1, 'type' => 'hidden']) ?>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.0.conteudo') ?>
                        </div>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.0.resultado_id', ['options' => $resultados]) ?>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="green-text card-title">Resumo</div>
                        <?= $this->Form->control('subtestes.1.tipo_id', ['value' => 2, 'type' => 'hidden']) ?>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.1.conteudo') ?>
                        </div>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.1.resultado_id', ['options' => $resultados]) ?>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="green-text card-title">Palavras-chave</div>
                        <?= $this->Form->control('subtestes.2.tipo_id', ['value' => 3, 'type' => 'hidden']) ?>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.2.conteudo') ?>
                        </div>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.2.resultado_id', ['options' => $resultados]) ?>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="green-text card-title">Autores</div>
                        <?= $this->Form->control('subtestes.3.tipo_id', ['value' => 4, 'type' => 'hidden']) ?>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.3.conteudo') ?>
                        </div>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.3.resultado_id', ['options' => $resultados]) ?>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="green-text card-title">Instituição</div>
                        <?= $this->Form->control('subtestes.4.tipo_id', ['value' => 5, 'type' => 'hidden']) ?>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.4.conteudo') ?>
                        </div>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.4.resultado_id', ['options' => $resultados]) ?>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="green-text card-title">Ano</div>
                        <?= $this->Form->control('subtestes.5.tipo_id', ['value' => 6, 'type' => 'hidden']) ?>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.5.conteudo') ?>
                        </div>
                        <div class="input-field">
                            <?= $this->Form->control('subtestes.5.resultado_id', ['options' => $resultados]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12 m12 l12">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn waves-effect waves-light col s12 m3 l3 offset-s0 offset-m9 offset-l9 green']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

<?= $this->Html->script('forms/testes', ['block'=>'script']) ?>
