<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid px-5 py-4">
        <div class="col-md-3">
            <a class="navbar-brand" href="#" style="font-family: 'Encode Sans Semi Expanded'; font-size: 32px;" id="brand-logo">Clay-Connect</a>
        </div>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home" id="home" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product" id="product" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Product</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="search" href="#search">
                        <img class="nav-link" id="search" src="{{ asset('image/search.svg') }}">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="cart" href="#cart">
                        <img class="nav-link" id="cart" src="{{ asset('image/cart.svg') }}">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="notif" href="#notif">
                        <img class="nav-link" id="notif" src="{{ asset('image/notif.svg') }}">
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="navbar-brand" href="#profile">
                        <img src="{{ asset('image/profil.svg') }}" id="profile" class="d-inline-block align-text-top">
                    </a>
                </li> --}}
            </ul>
        </div>
        <ul class="navbar-nav ms-auto d-none d-lg-flex">
            <li class="nav-item">
                <a class="search" href="#search">
                    <img class="nav-link" id="search" src="{{ asset('images/header/search.svg') }}">
                </a>
            </li>
            <li class="nav-item">
                <a class="cart" href="#cart">
                    <img class="nav-link" id="cart" src="{{ asset('images/header/cart.svg') }}">
                </a>
            </li>
            <li class="nav-item">
                <a class="notif" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="nav-link" id="notif" src="{{ asset('images/header/notif.svg') }}">
                </a>
            </li>
        </ul>
    </div>
</nav>

@include('partials.notification')

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#home" id="home" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#product" id="product" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Product</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand" href="#profile">
                    <img src="{{ asset('images/product_catalog/profil.svg') }}" id="profile" class="d-inline-block align-text-top">
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    const brandLogo = document.getElementById('brand-logo');
    const mediaQuery = window.matchMedia('(max-width: 992px)');

    function handleMediaQueryChange(e) {
        if (e.matches) {
            brandLogo.style.fontSize = '22px';
        } else {
            brandLogo.style.fontSize = '32px';
        }
    }

    mediaQuery.addListener(handleMediaQueryChange);
    handleMediaQueryChange(mediaQuery);
</script>