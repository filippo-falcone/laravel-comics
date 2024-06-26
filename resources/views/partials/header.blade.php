<header>
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @foreach($links as $link)
                        <li class="nav-item me-4">
                            <a class="nav-link" href="{{ strtolower($link) }}">{{ strtoupper($link) }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>