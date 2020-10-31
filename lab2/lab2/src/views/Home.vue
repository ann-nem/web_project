<template>
  <div class="home">
    <Carousel></Carousel>
    <div class="jumbotron">
      <h1 class="display-4">Вкусно, стильно, неповторимо</h1>
      <p class="lead">Каждый десерт для нашего онлайн-магазина производится по уникальным рецептам, а их украшение продумано до мельчайших деталей, чтобы радовать наших клиентов каждый день.</p>
      <hr class="my-4">
      <p>Сделайте свой первый заказ наших фирменных десертов уже сейчас.</p>
      <p class="lead"> <a class="btn btn-primary btn-lg" href="#" role="button">Посмотреть</a> </p>
    </div>
    <h1 class="display-4 text-center">Хиты недели</h1>
    <div class="card-deck">
      <div class="card"> <img src="https://madbutterbd.com/images/mad_butter/products/1/image.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Торт "Секрет небес"</h5>
          <p class="card-text">Десерт, выполненный в нежных голубо-розовых тонах со вкусом клубники со сливками, черники и воздушным суфле внутри.</p>
        </div>
        <div class="card-footer"> <small class="text-muted"><a href="product.html" class='product-link'>Перейти к товару</a></small> </div>
      </div>
      <div class="card"> <img src="https://i.pinimg.com/originals/69/42/b8/6942b8c6c23c9705e82055a5f27e57ce.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Капкейк "Единорог"</h5>
          <p class="card-text">Порция ярких воздушных капкейков со вкусом фруктов и нежной сливочной шапочкой.</p>
        </div>
        <div class="card-footer"> <small class="text-muted"><a href="" class='product-link'>Перейти к товару</a></small> </div>
      </div>
      <div class="card"> <img src="https://i.pinimg.com/736x/92/79/f7/9279f78aa0e02295cb9d31d1464dbb38.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Торт "Космос"</h5>
          <p class="card-text">Выполненный в стильной цветовой гамме торт, основные вкусовые составляющие которого - черничный вкус и шоколадные коржи внутри, а также фирменный крем.</p>
        </div>
        <div class="card-footer"> <small class="text-muted"><a href="" class='product-link'>Перейти к товару</a></small> </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import Carousel from "@/components/Carousel";

export default {
  name: 'Home',
  components: {
    Carousel
  }
}
</script>

