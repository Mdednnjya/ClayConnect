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
                    <div id="searchBox" style="display: none;">
                        <input type="text" placeholder="Search Product" id="searchInput" value="">
                        <button id="searchButton">Search</button>
                        <button id="closeSearch">X</button>
                    </div>
                </li>

                <li class="nav-item mr-2 d-flex justify-content-center align-items-center">
                    <a class="cart" href="{{ route('cart.view') }}">
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
                        <img src="{{ asset(Auth::user()->profile_picture) }}" id="profile" class="d-inline-block align-text-top rounded-circle" style="width: 40px; height: 40px;">
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
            <li class="nav-item mr-5 d-flex justify-content-center align-items-center">
                <a class="cart" href="#">
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
    const searchIcon = document.querySelector('.search');
    const closeSearch = document.getElementById('closeSearch');
    const searchBox = document.getElementById('searchBox');
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const navItems = document.querySelectorAll('.nav-item:not(.search)');

    searchIcon.addEventListener('click', (event) => {
        event.preventDefault();
        searchBox.style.display = 'block';
        searchIcon.style.display = 'none';
        navItems.forEach(item => item.style.display = 'none');
    });

    closeSearch.addEventListener('click', () => {
        searchBox.style.display = 'none';
        searchIcon.style.display = 'flex';
        navItems.forEach(item => item.style.display = 'flex');
    });

    searchButton.addEventListener('click', () => {
        const searchValue = searchInput.value.trim().toLowerCase();
        if (searchValue !== '') {
            // Redirect to products index page with search query
            window.location.href = `{{ route('products.index') }}?search=${searchValue}`;
        }
    });
</script>

