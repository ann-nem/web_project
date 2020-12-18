<template>
  <div class="card card-auto">
    <div class="card-header text-center"> Регистрация </div>
    <div class="card-body">
      <h5 class="card-title text-center">Добро пожаловать</h5>
      <p class="card-text text-center text-muted">Пожалуйста, заполните поля ниже.</p>
      <form @submit="handleSubmit">

        <div class="form-group">
          <label for="inputUsername">Логин</label>
          <input type="text" class="form-control" id="inputUsername" v-model="username" placeholder="Ваш логин">
        </div>

        <div class="form-group">
          <label for="inputPassword">Пароль</label>
          <input type="password" class="form-control" id="inputPassword" v-model="password" placeholder="Ваш пароль"> </div>

        <div class="form-group">
          <label for="repeatPassword">Повторите пароль</label>
          <input type="password" class="form-control" id="repeatPassword" v-model="repeatPassword" placeholder="Ваш пароль"> </div>

        <button type="submit" class="btn btn-primary btn-in">Зарегестрироваться</button>
      </form>
    </div>
  </div>
</template>

<script>
import router from "../router";
export default {
  name: "Registration",
  data() {
    return {
      username: '',
      password: '',
      repeatPassword: '',
    }
  },
  methods: {
    handleSubmit: function (e) {
      e.preventDefault()
      if (this.password !== this.repeatPassword) {
        alert('Пароли не совпадают')
        return
      }
      const submissionData = {
        username: this.username,
        password: this.password,
      }
      this.$http.post('/user/register', submissionData)
          .then((response) => {
            localStorage.setItem('userData', JSON.stringify(response.data))
            router.push({ name: 'Profile' })
          })
          .catch((error) => alert(error.response.data.statusText))
    }
  }
}
</script>

<style scoped>

</style>