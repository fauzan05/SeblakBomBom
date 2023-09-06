@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="px-3 py-2 border-bottom mb-3">
    <div class="d-flex flex-wrap justify-content-end">
        <form action="" method="post" class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
            <div class="input-group m-2">
                <input type="search" name="search" class="form-control" placeholder="Cari seblak..." aria-label="Cari seblak..." aria-describedby="button-addon2">
                <button class="btn btn-outline-dark" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>
    </div>
</div>
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="active" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner item">
        <div class="carousel-item active">
            <img src="http://127.0.0.1:8000/img/seblak1.jpeg" class="d-block" alt="seblak1">
            <div class="carousel-caption d-sm-block">
                <h5>Mengapa harus seblak bombom?</h5>
                <p>Karena dibuat dengan cita rasa dan penuh cinta</p>
                <a href="" type="button" class="btn btn-outline-light">Pesan Sekarang!</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="http://127.0.0.1:8000/img/seblak2.jpeg" class="d-block" alt="seblak1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Seblak Ceker Spesial</h5>
                <p>Yuk cobain seblak ceker spesial, dijamin maknyuss!!!</p>
                <a href="" type="button" class="btn btn-outline-light">Pesan Sekarang!</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="http://127.0.0.1:8000/img/seblak1.jpeg" class="d-block" alt="seblak1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Seblak Reguler</h5>
                <p>Gak suka ceker? Bisa coba reguler dengan tambahan topping yang bisa dicustom loh!</p>
                <a href="" type="button" class="btn btn-outline-light">Pesan Sekarang!</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br>
<br>
<hr>
<h1 class="text-center">Mau Pesan Apa Hari Ini? </h1>
<div class="container">
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-5 m-3">
            <div class="card shadow-click" style="width: 100%;">
                <img src="http://127.0.0.1:8000/img/seblak.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-text">Seblak</h3>
                </div>
            </div>
        </div>
        <div class="col-5 m-3">
            <div class="card shadow-click" style="width: 100%;">
                <img src="http://127.0.0.1:8000/img/minuman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-text">Minuman</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<br>
<br>
<hr>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <h1 class="mt-5 text-center">Tentang Kami</h1>

        <div class="text-center">
            <p>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
            </p>
        </div>
    </div>

</div>


@endsection