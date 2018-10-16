<?php
    $this->assign('title', 'Artigos');
    echo $this->Html->script(!$debug ? 'vue.min' : 'vue');
?>

<style>
.preloader-background {
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #eee;

	position: fixed;
	z-index: 100;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}
</style>
<div id="artigos">
    <artigos/>
</div>

<script>
const artigos = {
    template: `
    <div>
        <div class="preloader-background" ref="loading">
        	<div class="preloader-wrapper big active" ref="loadingWrapper">
        		<div class="spinner-layer spinner-blue-only">
        			<div class="circle-clipper left">
        				<div class="circle"></div>
        			</div>
        			<div class="gap-patch">
        				<div class="circle"></div>
        			</div>
        			<div class="circle-clipper right">
        				<div class="circle"></div>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="fixed-action-btn click-to-toggle">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li>
                    <a href="/artigos/add" class="btn-floating green" title="New Artigo">
                        <i class="material-icons">add</i>
                    </a>
                </li>
                <li>
                    <a href="/categorias" class="btn-floating orange darken-1" title="List Categorias">
                        <i class="material-icons">list</i>
                    </a>
                </li>
                <li>
                    <a href="/categorias/add" class="btn-floating orange darken-1" title="New Categoria">
                        <i class="material-icons">add</i>
                    </a>
                </li>
                <li>
                    <a href="/testes" class="btn-floating orange darken-1" title="List Testes">
                        <i class="material-icons">list</i>
                    </a>
                </li>
                <li>
                    <a href="/testes/add" class="btn-floating orange darken-1" title="New Testis">
                        <i class="material-icons">add</i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="card darken-1 col s12 m10 offset-m2">
            <div class="card-content black-text">
                <span class="card-title green-text">Artigos</span>
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th><a href="/artigos?direction=asc&amp;sort=id">Id</a></th>
                            <th><a href="/artigos?direction=asc&amp;sort=titulo">Titulo</a></th>
                            <th><a href="/artigos?direction=asc&amp;sort=categoria_id">Categoria</a></th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="artigo in artigos">
                            <td>{{artigo.id}}</td>
                            <td>{{artigo.titulo}}</td>
                            <td><a :href="'/categorias/view/' + artigo.categoria.id">{{artigo.categoria.nome}}</a></td>
                            <td>
                                <a :href="'/artigos/view/' + artigo.id"><i class="material-icons tiny-custom black-text" title="View">zoom_in</i></a>
                                <a :href="'/artigos/edit/' + artigo.id"><i class="material-icons tiny-custom black-text" title="Edit">create</i></a>
                                <form name="post_5bc41ee2b8a34939917873" style="display:none;" method="post" :action="'/artigos/delete/' + artigo.id">
                                    <input type="hidden" name="_method" value="POST">
                                </form>
                                <a href="#" onclick="if (confirm(&quot;Are you sure you want to delete # 1?&quot;)) { document.post_5bc41ee2b8a34939917873.submit(); } event.returnValue = false; return false;">
                                    <i class="material-icons tiny-custom black-text" title="Delete">delete</i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="center col s12">
            <ul class="pagination">
                <li class="prev disabled">
                    <a href="" onclick="return false;">
                        <i class="material-icons">chevron_left</i>
                    </a>
                </li>
                <li class="next disabled">
                    <a href="" onclick="return false;"><i class="material-icons">chevron_right</i>
                    </a>
                </li>
            </ul>
        </div>
        <p class="right">Página 1 de 1, exibindo 1 registro(s) de um total de 1</p>
    </div>
    `,
    data () {
        return {
            artigos: []
        }
    },
    mounted () {
        const auth = JSON.parse(localStorage.getItem('auth'));
        try{
            $.ajax({
                type: 'GET',
                url: '/api/v1/artigos.json',
                headers: {
                    'Authorization': `Bearer ${auth.token}`
                },
                success: data => this.artigos = data,
                error: xhr => window.location = '/pages/login',
                complete: response => {
                    $(this.$refs.loading).fadeOut();
                    $(this.$refs.loadingWrapper).removeClass('active');
                }
            });
        } catch {
            window.location = '/pages/login';
        }
    }
}

const app = new Vue({
    el: 'artigos',
    components: {
        artigos
    }
})
</script>
