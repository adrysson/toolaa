<?= $this->Form->create($teste) ?>
<span class="card-title green-text"><h5><?= $tipo ?> teste</h5></span>
<div class="row">
    <div class="col s12 m6 l3">
        <div class="input-field">
            <?= $this->Form->control('artigo_id', ['options' => $artigos, 'empty'=> 'Escolha um artigo']) ?>
        </div>
    </div>
    <div class="col s12 m6 l3">
        <div class="input-field">
            <?= $this->Form->control('ferramenta_id', ['options' => $ferramentas, 'empty'=> 'Escolha uma ferramenta']) ?>
        </div>
    </div>
    <!-- <div class="col s12 m6 l3">
        <div class="input-field">
            <?= $this->Form->control('usuario_id', ['options' => $usuarios]) ?>
        </div>
    </div> -->
    <?= $this->Form->control('usuario_id', ['value' => $this->request->getSession()->read('Auth.User.id'), 'type' => 'hidden']) ?>
</div>
<div class="row">
    <div class="black-text">
        <div class="card">
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
