@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://127.0.0.1:8000/img/seblak1.jpeg" class="d-block" alt="seblak1" style="width:fit-content; height:50vh; margin:auto; filter:brightness(50%);">
            <div class="carousel-caption d-none d-md-block">
                <h5>Seblak 1</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="http://127.0.0.1:8000/img/seblak2.jpeg" class="d-block" alt="seblak2" style="width:fit-content; height:50vh; margin:auto; filter:brightness(50%);">
            <div class="carousel-caption d-none d-md-block">
                <h5>Seblak 2</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="background-color: black;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="background-color: black;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection