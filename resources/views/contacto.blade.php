@extends('layouts.plantilla')

@section('cont')
    <div class="content-wrapper">
        <div class="d-flex">
            <div class="card mr-5" style="width: 18rem;">
                <h5>Nuestro whatsapp</h5>
                <img src="{{ asset('img/what.png') }}" alt="REDES">
                <h6 class="card-title">3177908872</h6>
            </div>
            <div class="card mr-5" style="width: 18rem;">
                <h5>Nuestro facebook</h5>
                <img src="{{asset('img/face.png')}}" alt="REDES">
                <h6 class="card-tittle">Estación Arcoíris Kids</h6> <br>
                <link rel="stylesheet" href="https://www.facebook.com/estacionarcoiriskids">
            </div>
            <div class="card mr-5" style="width:18rem">
                <h5>Nuestro Instagram</h5>
                <img src="{{asset('img/insta.jpg')}}" alt="REDES">
                <h6>Estacion Arcoiris kids</h6><br>
                <link rel="stylesheet" href="https://www.instagram.com/estacionarcoiriskids/?igshid=1q78d7zbwze1k&fbclid=IwAR0LBqXkYSPlNd3s5YCQ8SMlZ6QxL_bIq4wRPVFMqxf0uYJOsTGazNlI_Oc">
            </div>
        </div>
    </div>
@endsection
