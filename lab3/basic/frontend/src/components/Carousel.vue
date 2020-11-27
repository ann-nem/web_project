<template>
  <b-carousel
      :interval="4000"
      controls
      indicators>
    <b-carousel-slide
        img-src="https://cdn.pixabay.com/photo/2014/05/23/23/17/dessert-352475_1280.jpg"
    ></b-carousel-slide>
    <b-carousel-slide
        img-src="https://cdn.pixabay.com/photo/2019/04/19/17/48/cake-balls-4139982_1280.jpg"
    ></b-carousel-slide>
    <b-carousel-slide
        img-src="https://cdn.pixabay.com/photo/2017/11/11/20/32/food-2940374_1280.jpg"
    ></b-carousel-slide>
  </b-carousel>
</template>

<script>

export default {
name: "Carousel"
}
</script>