<style>
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}

main {
    flex: 1 0 auto;
}

body {
    background: #fff;
}

.input-field input[type=date]:focus + label,
.input-field input[type=text]:focus + label,
.input-field input[type=email]:focus + label,
.input-field input[type=password]:focus + label {
    color: #e91e63;
}

.input-field input[type=date]:focus,
.input-field input[type=text]:focus,
.input-field input[type=email]:focus,
.input-field input[type=password]:focus {
    border-bottom: 2px solid #e91e63;
    box-shadow: none;
}
</style>

<div class="section"></div>
<main align="center">
    <h4>Toolaa</h4>
    <h5 class="indigo-text">Realize seu login</h5>
    <div class="section"></div>
    <div class="container">
        <div class="row">
            <div class="col m6 offset-m3 s12">
                <div class="z-depth-1 grey lighten-4" style="padding: 32px 48px 16px 48px; border: 1px solid #EEE;">
                    <?= $this->Form->create() ?>
                    <div class='row'>
                        <div class='col s12'>
                            <legend>Realize seu login</legend>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <?= $this->Form->control('email', ['type' => 'email', 'class' => 'validate']) ?>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <?= $this->Form->control('senha', ['type' => 'password']) ?>
                        </div>
                    </div>

                    <br />
                    <center>
                        <div class='row'>
                            <?= $this->Form->button(__('Login'), ['class' => 'col s12 btn btn-large waves-effect indigo']); ?>
                        </div>
                    </center>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section"></div>
    <div class="section"></div>
</main>
