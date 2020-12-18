<template>
  <div class="home">
    <Carousel></Carousel>
    <div class="jumbotron">
      <h1 class="display-4">Вкусно, стильно, неповторимо</h1>
      <p class="lead">Каждый десерт для нашего онлайн-магазина производится по уникальным рецептам, а их украшение
        продумано до мельчайших деталей, чтобы радовать наших клиентов каждый день.</p>
      <hr class="my-4">
      <p>Сделайте свой первый заказ наших фирменных десертов уже сейчас.</p>
      <p class="lead"><a class="btn btn-primary btn-lg" href="#" role="button">Посмотреть</a></p>
    </div>
    <h1 class="display-4 text-center">Хиты недели</h1>
    <div class="card-deck">
      <div class="row">
        <div class="col-lg-4" v-for="item in items">
          <HitProduct v-bind:hitProduct="item"></HitProduct>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Carousel from "@/components/Carousel";
import HitProduct from "@/components/HitProduct";

export default {
  name: 'Home',
  components: {
    Carousel, HitProduct
  },
  data() {
    return {
      items: []
    }
  },
  created() {
    this.$http.get('/product/hitproducts')
        .then((response) => {
          console.log(response.data)
          this.items = [...response.data]
        })
  }
}
</script>

