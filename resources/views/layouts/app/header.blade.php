<nav class="navbar navbar-expand-md sticky-top" data-bs-theme="dark" style="background-color: red;">
    <div class="container">
        <a class="navbar-brand d-md-none" href="#">
            Seblak BomBom
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="#offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="#offcanvas" aria-labelledby="#offcanvasLabel">
            <div class="offcanvas-header">
                <h5 id="#offcanvasLabel">Seblak BomBom</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body align-items-center justify-content-between">
                <ul class="navbar-nav ">
                    <li class="nav-item fs-3"><a class="nav-link" href="#" style="color: white;">Seblak BomBom</a></li>
                </ul>
                <div class="text-end navbar-nav justify-content-between">
                    <li class="nav-item pe-5"><a class="nav-link" href="#">List Seblak</a></li>
                    <li class="nav-item pe-5"><a class="nav-link" href="#"><span class=" fa-solid fa-cart-shopping"></span> Keranjang</a></li>
                    <a href="{{ url('logout') }}" class="btn btn-dark">Logout</a>
                </div>

            </div>
        </div>
    </div>
</nav>