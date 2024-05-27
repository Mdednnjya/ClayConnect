<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid px-5 py-4">
        <div class="col-md-3">
            <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Encode Sans Semi Expanded'; font-size: 32px;" id="brand-logo">Clay-Connect</a>
        </div>
        <a class="nav-link" href="login" style="font-family: 'Scheherazade New'; font-size: 20px; font-weight: 600; text-decoration: none; color: white; background-color: #1a202c; transition: color 0.3s; padding: 6px 45px; border-radius: 25px" onmouseover="this.style.color='gray'" onmouseout="this.style.color='white'">Login</a>
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
