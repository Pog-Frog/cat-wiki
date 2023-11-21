<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="{{ Route('login') }}">{{ config('app.name') }}</a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                @auth('web')
                    <li class="nav-item">Welcome to {{ config('app.name') }} Admin panel<a class="nav-link" href="{{ Route('logout') }}">Logout</a></li>
                @endauth
                @guest('web')
                    <li class="nav-item">
                        Welcome to {{ config('app.name') }} Admin panel
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
