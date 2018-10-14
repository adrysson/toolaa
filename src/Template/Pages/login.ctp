<?php
    $this->assign('title', 'Toolaa');
    echo $this->Html->script(!$debug ? 'vue.min' : 'vue');
?>

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

form#form-login {
    display: inline-block;
    padding: 32px 48px 16px 48px;
    border: 1px solid #EEE;
}
</style>

<div id="login">
    <login/>
</div>

<script>
    const login = {
        template: `
        <div>
            <div class="section"></div>
            <main align="center">
                <h4>Toolaa</h4>
                <h5 class="indigo-text">Realize seu login</h5>
                <div class="section"></div>
                <div class="container">
                    <div class="row">
                        <div class="col m6 offset-m3 s12">
                            <div class="z-depth-1 grey lighten-4 row">
                                <form class="col s12" method="post" id="form-login">
                                    <div class="row">
                                        <div class="input-field">
                                            <input class="validate" type="email" v-model="loginData.email" name="email" id="email">
                                            <label for="email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field">
                                            <input class="validate" type="password" v-model="loginData.senha" name="senha" id="senha">
                                            <label for="senha">Senha</label>
                                        </div>
                                    </div>
                                    <center>
                                        <div class="row">
                                            <button type="submit" @click.prevent="login()" name="btn_login" class="col s12 btn btn-large waves-effect indigo">Login</button>
                                        </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        `,
        data: function() {
            return {
                loginData: {
                    email: '',
                    senha: ''
                }
            }
        },
        methods: {
            login: function () {
                $.post('/api/v1/usuarios/login', this.loginData, function(response){
                    console.log('sucesso');
                    console.log(response);
                })
                .fail(function(xhr){
                    console.log('erro');
                    console.log(xhr);
                })
                .always(function(data){
                    console.log('completo');
                    console.log(data);
                });
            }
        }
    }

    const app = new Vue({
        el: 'login',
        components: {
            login
        }
    })
</script>
