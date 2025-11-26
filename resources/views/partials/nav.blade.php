<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('inici') }}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('inici') ? 'active' : '' }}" href="{{ route('inici') }}">Inici</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts_llistat') ? 'active' : '' }}" href="{{ route('posts_llistat') }}">Llistat de posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>