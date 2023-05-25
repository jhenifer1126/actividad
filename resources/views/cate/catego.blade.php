@extends('layouts.plantilla')

@section('cont')
<div class="content-wrapper">
    <h2>Estas son nuestras categorias</h2>
    <div class="d-flex">
        <div class="card mr-5" style="width: 18rem;">
            <img src="{{asset('img/inflable.jpg')}}" class="card-img-top" alt="infla">
          <div class="card-body">
            <h4 class="card-title">Nuestros Inflables</h4><br>
            <p class="card-text">En nuestros inflables disfrutaras de las mejores experiencias para tus hijos y sus amigos, diviertete y dale un lindo cumpleaños a los mas pequeños de la casa.¡ANIMATE!</p>
            <a href="{{route('inflable.index')}}" class="btn btn-primary">INFLABLES</a>
          </div>
        </div>

        <div class="card mr-5" style="width: 18rem;">
          <img src="{{asset('img/trampolin.jpg')}}" class="card-img-top" alt="trampo">
          <div class="card-body">
            <h5 class="card-title">Nuestro Brinca Brinca</h5><br>
            <p class="card-text">Con nuestros trampolines para los niños mas pequeños de la casa paasaran una reunion agradable junto a sus compañeritos del colegio o de su vecindfario,¡No te quedes sin probar esta experiencia para tus hijos!</p>
            <a href="{{route('brinca.index')}}" class="btn btn-primary">BRINCA BRINCA</a>
          </div>
        </div>


      <div class="card" style="width: 18rem;">
        <img src="{{asset('img/burbujas.jpg')}}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Nuestras Bumper Ball</h5>
          <p class="card-text">Con nuestra nueva atraccion disfrutaran los mas graandes de la casa,animate a probar nuestra nueva idea de comaprtir con tus amigos de la universidad o tu propia familia mientras se divierten tirandosen al piso con estas grandiosas pelotas burbuja.</p>
          <a href="{{route('ball.index')}}" class="btn btn-primary">BUMPER BALL</a>
        </div>
      </div>
    </div>

</div>
@endsection
