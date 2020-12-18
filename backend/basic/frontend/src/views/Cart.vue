<template>
<div class="container cart-page profile-text">
<h1>Корзина</h1>
<div class="cart-empty" v-if="cart.total === 0">
  К сожалению, в вашей корзине пока что нет товаров.
</div>
<div class="cart" v-if="cart.total > 0">
  <div v-for="product in cart.products">
    <div class="media cart-product">
      <img class="cart-img" v-bind:src="product.img">
      <div class="media-body text-cart">
        <h5><router-link v-bind:to="{name: 'Product', params: {url: product.url}}" class="cart-name">
          {{product.name}}
        </router-link></h5>
        {{product.price}} ₽
        </div>
      <button class="btn btn-danger btn-sm del-cart" v-on:click="remove(product)">Удалить</button>
    </div>
  </div>
  <hr>
  <h5 class="cart-total">Итого: {{cart.total}} ₽</h5>
</div>
</div>
</template>

<script>
import CartData from '@/components/cart/cart'
export default {
  name: "Cart",
  data() {
    return {
      cart: CartData
    }
  },
  methods: {
    remove(item) {
      this.cart.remove(item)
    }
  }
}
</script>