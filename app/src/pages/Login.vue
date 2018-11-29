<template>
    <div class="login">
        <section class="intro-2">
            <div class="mask h-100 d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">
                            <h2 class="h2 mb-2 text-center">TOOLAA</h2>
                            <legend class="small justify-content-center align-items-center text-center">
                                Made by <a href="https://github.com/adrysson" target="_blank">Adrysson</a>
                            </legend>
                            <form class="text-center white border border-light p-5">
                                <p class="h4 mb-4">Login</p>
                                <input type="email" v-model="form.email" class="form-control mb-4" placeholder="E-mail">
                                <input type="password" v-model="form.senha" class="form-control mb-4" placeholder="Senha">
                                <button class="btn btn-info btn-block my-4" type="submit" :disabled="loading" @click.prevent="login()">
                                  <div v-if="!loading">Entrar</div>
                                  <div v-if="loading" class="spinner"></div>
                                </button>
                            </form>
                            <legend class="small justify-content-center align-items-center text-center">
                                2018 - {{current_year}}
                            </legend>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>

export default {
  name: 'login',
  data () {
    return {
      current_year: (new Date()).getFullYear(),
      form: {
        email: '',
        senha: ''
      },
      loading: false
    }
  },
  methods: {
    login () {
      this.loading = true
      setTimeout(() => {
        this.loading = false
      }, 1000)
    }
  }
}
</script>
