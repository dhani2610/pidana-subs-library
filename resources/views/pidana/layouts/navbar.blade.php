<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">BELAJAR ISENG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ruang-konsultasi">Ruang Konsultasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/library">Library</a>
                </li>
                <li class="nav-item">
                    @if (Auth::guard('admin')->check() != null)
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Hi,
                            {{ Auth::guard('admin')->user()->name }}</a>
                    @else
                        <a class="nav-link" href="{{ url('admin/login') }}">Login</a>
                    @endif

                </li>
            </ul>
        </div>
    </div>
</nav>
