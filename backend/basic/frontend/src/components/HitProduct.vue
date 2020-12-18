<template>
  <div class="card card-hit"><img class="card-img-top" v-bind:src="hitProduct.img">
    <div class="card-body">
      <h5>
        <router-link v-bind:to="{name: 'Product', params: {id: hitProduct.id}}" class="catalog-title">
          {{ hitProduct.name }}
        </router-link>
      </h5>
      <p class="card-text">{{ hitProduct.description }}</p>
    </div>
    <div class="card-footer"><small class="text-muted"><a href="" class='product-link'>
      <router-link v-bind:to="{name: 'Product', params: {id: hitProduct.id}}" class="hit-footer">
        Перейти к товару
      </router-link>
    </a></small></div>
  </div>
</template>

<script>
export default {
  name: "HitProduct",
  props: ['hitProduct'],
}
</script>
