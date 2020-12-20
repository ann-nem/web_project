<template>
  <div class="row">
    <div class="col-md-3">
      <div class="filter">
        <h5>Категория</h5>
        <ul class="list-unstyled">
          <li v-for="category in filter.categories">
            <label>
              <input type="CheckBox" :id="category.name"> {{category.name}}
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
              <input type="checkbox" :id="filling.name"> {{filling.name}}
            </label>
          </li>
        </ul>
        <hr>
      </div>
      <button class="btn btn-secondary btn-category" v-on:click="checkCategory">Применить</button>
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
        categories: [],
        fillings: []
      },
      items: []
    }
  },
  created() {
    this.$http.get('/product/all')
        .then((response) => this.items = response.data)

    this.$http.get('/category/all')
        .then((response) => this.filter.categories = response.data)

    this.$http.get('/filling/all')
        .then((response) => this.filter.fillings = response.data)
  },
  methods:{
    checkCategory(){
      var category;
      this.filter.categories.forEach(function(item, i) {
        var x = document.getElementById(item.name);
        if (x.checked) {
          category = item.id;
        }
      });

      this.$http.get('/product/idcategory', {params: {idCategory: category}})
            .then((response) => {console.log(response.data)
              this.items = [...response.data]})

      var filling;
      this.filter.fillings.forEach(function(item, i) {
        var x = document.getElementById(item.name);
        if (x.checked) {
          filling = item.id;
        }
      });

      this.$http.get('/product/idfilling', {params: {idFilling: filling}})
          .then((response) => {console.log(response.data)
            this.items = [...response.data]})

    }
  }
}

</script>