<template>
  <div class="back-page">
  <div class="container">
    <div class="card card-auto">
      <div class="card-header text-center"> Авторизация </div>
      <div class="card-body">
        <h5 class="card-title text-center">Добро пожаловать</h5>
        <p class="card-text text-center text-muted">Введите ваш логин и пароль.</p>
        <form @submit="handleSubmit">
          <div class="form-group">
            <label for="inputUsername">Логин</label>
            <input type="text" class="form-control" id="inputUsername" v-model="username" placeholder="Ваш логин">
          </div>
          <div class="form-group">
            <label for="inputPassword">Пароль</label>
            <input type="password" class="form-control" id="inputPassword" v-model="password" placeholder="Ваш пароль"> </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Запомнить</label>
          </div>
          <button type="submit" class="btn btn-primary btn-in">Войти</button>
          <router-link class="nav-link text-center reg-link" v-bind:to="{name: 'Registration'}">Зарегестрироваться</router-link>
        </form>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
import router from "../router";
import User from '@/components/user/user'
export default {
  name: "SignIn",
  data() {
    return {
      username: '',
      password: ''
    }
  },

  methods: {
    handleSubmit: function (e) {
      e.preventDefault()

      const submissionData = {
        username: this.username,
        password: this.password,
      }

      console.log("sd - " + submissionData.username);

      this.$http.post('/user/login', submissionData)
          .then((response) => {
            localStorage.setItem('userData', JSON.stringify(response.data))
            if (response.data.name != undefined){
              console.log(response.data.name)
              router.push({ name: 'Profile' })
            }
            else{
              alert("Неправильно введен логин или пароль")
            }
          })
          .catch((error) => alert(error.response.data.statusText))
      // signIn(e) {
      //   if (this.validate()) {
      //     const result = {
      //       name: 'Иван Иванов',
      //       email: 'ivan@ya.ru',
      //       accessToken: 'jsdlf732649823709!ew98r#$432'
      //     }
      //     User.login(result)
      //   }
      //   e.preventDefault()
      // },
      // validate() {
      //   this.errors = {}
      //   if (this.email.trim().length === 0) {
      //     this.errors.email = 'Заполните Email.'
      //   }
      //   if (this.password.trim().length === 0) {
      //     this.errors.password = 'Заполните Пароль.'
      //   }
      //   return Object.keys(this.errors).length === 0
      // }
    }
  }
}
</script>