<?php
    $this->assign('title', 'Artigos');
    echo $this->Html->script(!$debug ? 'vue.min' : 'vue');
?>

<style>
.preloader-background {
	display: flex;
	align-items: center;
	justify-content: center;

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
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large green modal-trigger waves-effect waves-light" href="#modal-add-artigo" @click="getCategorias()">
                <i class="large material-icons">add</i>
            </a>
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
            <ul class="pagination" v-if="pagination.page_count > 1">
                <li :class="'prev ' + (!pagination.has_prev_page ? 'disabled' : '')" @click.prevent="getArtigos(pagination.has_prev_page ? pagination.current_page - 1 : '')">
                    <a href="javascript:;">
                        <i class="material-icons">chevron_left</i>
                    </a>
                </li>
				<li @click.prevent="getArtigos(n)" v-for="n in pagination.page_count" :class="(pagination.current_page == n ? 'active' : 'waves-effect')">
					<a href="javascript:;">{{n}}</a>
				</li>
                <li :class="'next ' + (!pagination.has_next_page ? 'disabled' : '')" @click.prevent="getArtigos(pagination.has_next_page ? pagination.current_page + 1 : '')">
                    <a href="javascript:;">
						<i class="material-icons">chevron_right</i>
                    </a>
                </li>
            </ul>
        </div>
        <p class="center">Página {{pagination.current_page}} de {{pagination.page_count}}, exibindo {{this.artigos.length}} registro(s) de um total de {{pagination.count}}</p>
        <div class="card darken-1 col s12 m10 offset-m2">
            <div id="modal-add-artigo" class="modal">
                <div class="modal-content">
                    <h4 class="card-title green-text">
                        Adicionar artigo
                        <a href="javascript:;" class="right modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
                    </h4>
                    <div class="card-content black-text">
                        <form method="post" accept-charset="utf-8">
                            <div class="row">
                                <div class="col s12 m6 l6">
                                    <div class="input-field">
                                        <input type="text" name="titulo" required="required" class="validate" maxlength="255" id="titulo">
                                        <label data-error="Este campo é obrigatório" for="titulo">Titulo</label>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6">
                                    <div class="input-field col s12">
                                        <select name="categoria_id" class="validate" required id="categoria-id">
                                            <option value="" disabled>Escolha uma categoria</option>
                                            <option v-for="categoria in categorias" selected :value="categoria.id">{{categoria.nome}}</option>
                                        </select>
                                        <label for="categoria-id">Categoria</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <button class="btn waves-effect waves-light col s12 m3 l3 offset-s0 offset-m9 offset-l9 green-background" type="submit" @click.prevent="addArtigo()">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `,
    data () {
        return {
            artigos: [],
			pagination: {},
            categorias: [],
			auth: JSON.parse(localStorage.getItem('auth'))
        }
    },
	methods: {
		getArtigos (page = 1) {
			try{
	            $.ajax({
	                type: 'GET',
	                url: `/api/v1/artigos.json?limit=10&&page=${page}`,
	                headers: {
	                    'Authorization': `Bearer ${this.auth.token}`
	                },
					beforeSend: () => {
						$(this.$refs.loading).fadeIn();
	                    $(this.$refs.loadingWrapper).addClass('active');
					},
	                success: response => {
						this.artigos = response.data;
						this.pagination = response.pagination
					},
	                error: xhr => window.location = '/pages/login',
	                complete: response => {
	                    $(this.$refs.loading).fadeOut();
	                    $(this.$refs.loadingWrapper).removeClass('active');
	                }
	            });
	        } catch {
	            window.location = '/pages/login';
	        }
		},
        getCategorias () {
            try{
	            $.ajax({
	                type: 'GET',
	                url: `/api/v1/artigos_categorias.json`,
	                headers: {
	                    'Authorization': `Bearer ${this.auth.token}`
	                },
					beforeSend: () => {
						$(this.$refs.loading).fadeIn();
	                    $(this.$refs.loadingWrapper).addClass('active');
					},
	                success: response => {
                        this.categorias = response.data
                        setTimeout(() => {
                            this.$forceUpdate();
                        }, 1500)
                    },
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
	},
    mounted () {
		this.getArtigos();
        $(document).ready(function(){
          $('.modal').modal();
        });
    }
}

const app = new Vue({
    el: 'artigos',
    components: {
        artigos
    }
})
</script>
