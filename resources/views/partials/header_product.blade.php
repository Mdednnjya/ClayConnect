<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid px-5 py-4">
        <div class="col-md-3">
            <a class="navbar-brand" href="#" style="font-family: 'Encode Sans Semi Expanded'; font-size: 32px;" id="brand-logo">Clay-Connect</a>
        </div>
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
                        <a class="nav-link" href="#about" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#goals" style="font-family: 'Lato'; font-size: 20px; text-decoration: none; color: black; transition: color 0.3s;" onmouseover="this.style.color='gray'" onmouseout="this.style.color='black'">Product</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a class="nav-link" href="profile/account">
                <img src="{{ asset('images/profil.svg') }}" alt="Profile">
            </a>
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
