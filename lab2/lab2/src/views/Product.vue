<template>
  <div class="col-9 container product">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="card mb-3 product-card border border-secondary" style="max-width: 1300px">
        <div class="row no-gutters">
          <div class="col-md-4"> <img class="card-img img-border"  style="max-width: 400px" v-bind:src="product.image"> </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title product-title product-name">{{product.name}}</h4>
              <hr>
              <p class="card-text"> Десерт, выполненный в нежных голубо-розовых тонах со вкусом клубники со сливками, черники и воздушным суфле внутри.
                <br>Состав: суфле, кокос, сливки, клубничный джем, черничное суфле
                <br>Вес: 3000г
                <br>Срок хранения: 5 суток
                <br>
              <hr>
              <p class="price">Цена: {{product.price}}&#8381</p>
              <button class="btn btn-outline-success btn-product" v-on:click="addToCart">Добавить в корзину </button>
              <p class="card-text"><small class="text-muted">Средний срок приготовления - 1 день</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card text-center info-product">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item"> <a class="nav-link active" href="#">Подробнее</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Отзывы</a> </li>
            <li class="nav-item"> <a class="nav-link disabled" href="#">Похожие товары</a> </li>
          </ul>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Десерт, выполненный в нежных голубо-розовых тонах со вкусом клубники со сливками, черники и воздушным суфле внутри.</li>
          <li class="list-group-item">Пищевая и энергетическая ценность на 100 г продукта (средние значения):
            <br> Жиры- 12,9 г, Белки- 3,5 г, Углеводы- 29,5 г,
            <br> Энергетическая ценность (калорийность)- 1079 кДж (258 Ккал).</li>
          <li class="list-group-item">Условия хранения: от +2 до +6 °C </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import CartData from '@/components/cart/cart'

export default {
  name: "Product",
  data() {
    return {
      product: {}
    }
  },
  created() {
    const url = this.$route.params.url
    // Send Ajax Request (id)
    const result = {
      id: 1,
        name: 'Торт "Секрес небес"',
        url: 'СекретНебес',
        image: 'https://madbutterbd.com/images/mad_butter/products/1/image.jpg',
        price: 3500
    }
    this.product = result
  },
  methods: {
    addToCart() {
      CartData.add(this.product)
      // Send Ajax Request
    }
  }
}
</script>