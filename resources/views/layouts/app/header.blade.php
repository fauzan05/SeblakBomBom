<header>
    <div class="p-3 text-bg-light border-bottom header shadow-sm">
        <div class="container align-items-center justify-content-center">
            <div class="d-flex flex-wrap ">
                <a href="/" class="d-flex align-items-center my-lg-0 me-lg-auto text-light text-decoration-none">
                    <span class="border border-light rounded">
                        <h1 class="bold m-2">Seblak BomBom</h1>
                    </span>
                </a>
                <ul class="nav justify-content-center text-small">
                    <li>
                        <a href="#" class="nav-link text-light my-2">
                            <span class="fa-solid fa-house"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-light my-2">
                            <span class="fa-solid fa-clipboard-list"></span>
                            Pesanan
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-light my-2">
                            <span class="fa-solid fa-bowl-food"></span>
                            Produk
                        </a>
                    </li>
                    @if(isset($name))
                    <li>
                        <div class="dropdown">
                            <a href="#" class="nav-link text-light my-2" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fa-solid fa-user"></span>
                                {{ $name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('phoneNumberChanges') }}">Ganti Nomor Telepon</a></li>
                                <li><a class="dropdown-item" href="{{ url('password-changes') }}">Ganti Password </a></li>
                                <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                            </ul>
                        </div>

                    </li>
                    @else
                    <li>
                        <a href="{{ url('login') }}" type="button" class="my-2 ms-4 btn btn-dark">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

</header>