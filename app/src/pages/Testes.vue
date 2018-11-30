<template>
  <div id="testes">
    <h2>to nos testes</h2>
  </div>
</template>

<script>
export default {
  name: 'testes',
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
