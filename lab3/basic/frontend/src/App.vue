<template>
  <div id="app">
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <img src="https://img.icons8.com/dusk/64/000000/cake.png" />
      <router-link class="navbar-brand" v-bind:to="{name: 'Home'}">Сладкая лавка</router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <router-link class="nav-link" v-bind:to="{name: 'Catalog'}">Каталог</router-link></li>
          <li class="nav-item"> <router-link class="nav-link" v-bind:to="{name: 'Actions'}">Акции</router-link> </li>
          <li class="nav-item"> <router-link class="nav-link" v-bind:to="{name: 'Delivery'}">Доставка и оплата</router-link> </li>
          <li class="nav-item"> <router-link class="nav-link" v-bind:to="{name: 'Contact'}">Контакты</router-link> </li>
        </ul>
        <div class="my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
            <li class="my-2 mr-sm-2">
              <CartWidget></CartWidget>
            </li>
            <li class="nav-item my-2 mr-sm-2" v-if="user.isAuth()">
              <router-link class="nav-link" v-bind:to="{name: 'Profile'}">{{user.email}}</router-link>
            </li>
            <li class="nav-item my-2 mr-sm-2" v-else>
              <router-link class="nav-link" v-bind:to="{name: 'SignIn'}">Войти</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </header>

    <main role="main">
      <router-view/>
    </main>

    <footer class="footer">
      <hr>
      <div class="container"> <span class="text-muted text-center">Наш номер телефона для заказа: 8-900-500-00-00</span> </div>
    </footer>
  </div>
</template>
<script>
import CartWidget from "@/components/cart/CartWidget";
import User from '@/components/user/user'
export default {
  components: {CartWidget},
  data() {
    return {
      user: User
    }
  }
}
</script>