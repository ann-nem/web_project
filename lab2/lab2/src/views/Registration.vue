<template>
  <div class="card card-auto">
    <div class="card-header text-center"> Регистрация </div>
    <div class="card-body">
      <h5 class="card-title text-center">Добро пожаловать</h5>
      <p class="card-text text-center text-muted">Пожалуйста, заполните поля ниже.</p>
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4"> </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Пароль</label>
            <input type="password" class="form-control" id="inputPassword4"> </div>
        </div>
        <p>День рождения</p>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="Число"> </div>
          <div class="form-group col-md-4">
            <input type="text" class="form-control"  placeholder="Месяц"> </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control" placeholder="Год"> </div>
        </div>
        <p>Адрес</p>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="inputCity" placeholder="Город"> </div>
          <div class="form-group col-md-4">
            <input type="text" class="form-control" id="inputStreet" placeholder="Улица"> </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control" id="inputHouse" placeholder="Дом"> </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck"> Присылать мне акции и предложения </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-in btn-reg">Зарегестрироваться</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
name: "Registration"
}
</script>

<style scoped>

</style>