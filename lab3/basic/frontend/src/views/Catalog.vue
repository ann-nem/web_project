<template>
  <div class="back-page">
  <div class="container catalog">
    <h1 class="page-title">Каталог товаров</h1>
    <ProductList></ProductList>
  </div>
  </div>
</template>

<script>
import ProductList from "@/components/products/ProductList";
export default {
  name: "Catalog",
  components: {ProductList}
}
</script>