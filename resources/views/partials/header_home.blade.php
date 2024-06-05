<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid px-5 py-4">
        <a class="navbar-brand" href="#" style="font-family: 'Encode Sans Semi Expanded'; font-size: 32px;" id="brand-logo">Clay-Connect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#about" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">About</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#goals" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Our Goals</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#location" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Location</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#contact" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Contact</a>
                    </li>
                    @guest
                        <li class="nav-item px-2">
                            <a class="nav-link" href="{{ route('login') }}" style="font-family: 'Scheherazade New'; font-size: 20px; font-weight: 600; text-decoration: none; color: white; background-color: #1a202c; transition: color 0.3s; padding: 6px 45px; border-radius: 25px" onmouseover="this.style.color='gray'" onmouseout="this.style.color='white'">Login</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item px-2">
                            <a class="navbar-brand" href="{{ route('account') }}">
                                <img src="{{ asset(Auth::user()->profile_picture) }}" id="profile" class="d-inline-block align-text-top" style="width: 40px; height: 40px;">
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
    const brandLogo = document.getElementById('brand-logo');
    const mediaQuery = window.matchMedia('(max-width: 576px)');

    function handleMediaQueryChange(e) {
        if (e.matches) {
            brandLogo.style.fontSize = '22px';
        } else {
            brandLogo.style.fontSize = '32px';
        }
    }

    mediaQuery.addListener(handleMediaQueryChange);
    handleMediaQueryChange(mediaQuery);

    document.querySelectorAll('.offcanvas-body .nav-link').forEach(link => {
        link.addEventListener('click', function() {
            const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('offcanvasNavbar'));
            offcanvas.hide();
        });
    });
</script>
