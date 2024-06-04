<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid px-5 py-4">
        <a class="navbar-brand" href="/" style="font-family: 'Encode Sans Semi Expanded'; font-size: 32px;" id="brand-logo">Clay-Connect</a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item d-flex justify-content-center align-items-center">
                    <a class="nav-link" href="/" id="home" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Home</a>
                </li>
                <li class="nav-item d-flex justify-content-center align-items-center">
                    <a class="nav-link" href="{{ route('products.index') }}" id="product" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Product</a>
                </li>
                <li class="nav-item mr-2 d-flex justify-content-center align-items-center">
                    <a class="search" href="#search">
                        <img class="nav-link" id="search" src="{{ asset('images/header/search.svg') }}">
                    </a>
                </li>
                <li class="nav-item mr-2 d-flex justify-content-center align-items-center">
                    <a class="cart" href="{{ route('wishlist') }}">
                        <img class="nav-link" id="cart" src="{{ asset('images/header/cart.svg') }}">
                    </a>
                </li>
                <li class="nav-item mr-2 d-flex justify-content-center align-items-center">
                    <a class="notif" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="nav-link" id="notif" src="{{ asset('images/header/notif.svg') }}">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('account') }}">
                        <img src="{{ asset('images/profil.svg') }}" id="profile" class="d-inline-block align-text-top">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@include('partials.notification')

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand" href="{{ route('account') }}">
            <img src="{{ asset('images/profil.svg') }}" id="profile" class="d-inline-block align-text-top">
        </a>
        <div class="icon-container d-flex justify-content-between align-items-center mx-auto">
            <li class="nav-item ml-4 mr-5 d-flex justify-content-center align-items-center">
                <a class="search" href="#search">
                    <img class="nav-link" id="search" src="{{ asset('images/header/search.svg') }}">
                </a>
            </li>
            <li class="nav-item mr-5 d-flex justify-content-center align-items-center">
                <a class="cart" href="{{ route('wishlist') }}">
                    <img class="nav-link" id="cart" src="{{ asset('images/header/cart.svg') }}">
                </a>
            </li>
            <li class="nav-item d-flex justify-content-center align-items-center">
                <a class="notif" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="nav-link" id="notif" src="{{ asset('images/header/notif.svg') }}">
                </a>
            </li>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/" id="home" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}" id="product" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Product</a>
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