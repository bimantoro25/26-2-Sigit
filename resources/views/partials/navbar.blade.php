<nav class="navbar navbar-expand-md navbar-dark bg-danger shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Sigit Bimantoro
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ Request::url() == url('/') ? 'active' : ' ' }}" href="/">Home</a>
                    <a class="nav-link {{ Request::url() == url('/about') ? 'active' : ' ' }}" href="/about">About</a>
                    <a class="nav-link {{ Request::url() == url('/gallery') ? 'active' : ' ' }}"
                        href="/gallery">Gallery</a>
                    <a class="nav-link {{ Request::url() == url('/contact') ? 'active' : ' ' }}"
                        href="/contact">Contact</a>
                </div>
            </div>


        </div>
    </div>
</nav>
