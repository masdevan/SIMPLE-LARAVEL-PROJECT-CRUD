<nav class="navbar navbar-dark navbar-expand-lg bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">MasDevan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "Home") ? 'active' : "" }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "About") ? 'active' : "" }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "Blog") ? 'active' : "" }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "Category") ? 'active' : "" }}" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Welome Back User {{ auth()->user()->name  }}
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                  <form action="/logout" method="POST">@csrf<button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> LogOut</button></form>
                </ul>
              </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link text-white {{ ($active === "Login") ? 'active' : "" }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
