<?= $this->Form->create($ferramenta) ?>
<span class="card-title green-text"><?= $tipo ?> ferramenta</span>
<div class="row">
    <div class="col s12 m6 l6">
        <div class="input-field">
            <?= $this->Form->control('nome') ?>
        </div>
    </div>
</div>
<div class="row">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn waves-effect waves-light col s12 m3 l3 offset-s0 offset-m9 offset-l9 green']) ?>
    <?= $this->Form->end() ?>
</div>
