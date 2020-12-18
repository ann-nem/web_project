<template>

  <div class="jumbotron">
    <h2 v-if="user">Вы зашли как {{ user.name }}</h2>
    <h2 v-if="!user">К сожалению, вы еще не зашли.</h2>
    <hr class="my-4">
    <p class="lead" v-if="user">Вы можете сделать заказ на нашем сайте уже сейчас!</p>
    <p class="lead" v-if="!user">Вы можете зайти в свой профиль или зарегестрироваться прямо сейчас.</p>
    <p class="lead">
            <button v-if="user" class="btn btn-secondary btn-buy"  v-on:click="signOut">Выйти</button>
            <button v-if="!user" class="btn btn-secondary btn-buy" v-on:click="routeToSignIn">Войти</button>
            <button v-if="!user" class="btn btn-secondary btn-buy" v-on:click="routeToSignUp">Зарегестрироваться</button>
    </p>
  </div>

</template>

<script>
import router from "../router";
export default {
  name: "Profile",
  data() {
    return {
      user: null
    }
  },
  created() {
    if (localStorage.getItem('userData') === null) {
      return
    }
    const userData = JSON.parse(localStorage.getItem('userData'));
    this.user = { ...userData }
  },
  methods: {
    routeToSignIn() {
      router.push({ name: 'SignIn' })
    },

    routeToSignUp() {
      router.push({ name: 'Registration' })
    },

    signOut() {
      localStorage.removeItem('userData')
      this.user = null
    }
  }
}
</script>