<template>
  <div class="product mb-5">
    <div class="form-group text-center">
      <img class="img-fluid img-border" v-bind:src="product.img">
    </div>
    <h3>
      <router-link v-bind:to="{name: 'Product', params: {url: product.url}}" class="catalog-title">
        {{product.name}}
      </router-link>
    </h3>
    <p>{{product.price}} &#8381</p>
    <p>
      <button class="btn btn-secondary btn-buy" v-on:click="addToCart">Купить</button>
    </p>
  </div>
</template>

<script>
import CartData from '@/components/cart/cart'
export default {
  name: "Product",
  props: ['product'],
  methods: {
    addToCart() {
      //console.log(this.product.id)
      CartData.add(this.product)
    }
  }
}
</script>