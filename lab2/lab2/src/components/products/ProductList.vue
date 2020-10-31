<template>
  <div class="row">
    <div class="col-md-3">
      <div class="filter">
        <h5>Категория</h5>
        <ul class="list-unstyled">
          <li v-for="category in filter.categories">
            <label>
              <input type="checkbox"> {{category}}
            </label>
          </li>
        </ul>
        <hr>
      </div>
      <div class="filter">
        <h5>Начинка</h5>
        <ul class="list-unstyled">
          <li v-for="filling in filter.fillings">
            <label>
              <input type="checkbox"> {{filling}}
            </label>
          </li>
        </ul>
        <hr>
      </div>
      <div class="filter">
        <h5>Вес</h5>
        <div class="d-flex">
          <input type="number" class="form-control" placeholder="от">
          <input type="number" class="form-control" placeholder="до">
        </div>
        <hr>
      </div>
      <div class="filter">
        <h5>Стоимость</h5>
        <div class="d-flex">
          <input type="number" class="form-control" placeholder="от">
          <input type="number" class="form-control" placeholder="до">
        </div>
        <hr>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-lg-4" v-for="item in items">
          <Product v-bind:product="item"></Product>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Product from "@/components/products/Product";
export default {
  name: "ProductList",
  components: {Product},
  data() {
    return {
      filter: {
        categories: ['Торты', 'Капкейки', 'Пирожные', 'Пончики', 'Печенье'],
        fillings: ['Три шоколада', 'Сливочно-клубничная', 'Красный бархат', 'Морковная с апельсиновым курдом', 'Чизкейк Орео', 'Кокосовая',
        'Фисташка-малина', 'Банан-шоколад', 'Лаванда-еживика', 'Пломбир', 'Сникерс', 'Своя начинка']
      },
      items: [
        {
          id: 1,
          name: 'Торт "Секрес небес"',
          url: 'СекретНебес',
          image: 'https://madbutterbd.com/images/mad_butter/products/1/image.jpg',
          price: 3500
        },
        {
          id: 2,
          name: 'Капкейки "Единорог"',
          url: 'Единорог',
          image: 'https://i.pinimg.com/originals/69/42/b8/6942b8c6c23c9705e82055a5f27e57ce.jpg',
          price: 650
        },
        {
          id: 3,
          name: 'Торт "Космос"',
          url: 'Космос',
          image: 'https://i.pinimg.com/736x/92/79/f7/9279f78aa0e02295cb9d31d1464dbb38.jpg',
          price: 3500
        },
      ]
    }
  }
}
</script>