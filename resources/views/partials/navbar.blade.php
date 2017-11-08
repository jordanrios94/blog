<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#">Jordan's Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>

        @if (Route::has('login'))
            @auth
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-info">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="btn btn-info">Register</a>
                </li>
            @endauth
        @endif
        </ul>
    </div>
    </div>
</nav>
