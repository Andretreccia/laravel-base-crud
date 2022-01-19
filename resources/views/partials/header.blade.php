<header id="site_header">
    <div class="banner">
        <div class="d-flex container justify-content-end text-white">
            <span class="me-5">Dc power&trade; visa &reg; </span>
            <span>  Additional dc sites <span>&dtrif; </span> </span>
        </div>
    </div>

    <nav class="navbar navbar-light">
        <div class="container">
            <a class="" href="{{route('welcome')}}">
                <img src="{{asset('img/dc-logo.png')}}" alt="brand logo" class="d-inline-block align-text-top">
            </a>
            <ul class="navbar-nav d-flex flex-row flex-wrap">
                {{-- <li class="nav-item">
                    <a class="nav-link active" href="#">CHARACTERS</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('comics')}}">COMICS</a>      
                </li>
                <li class="nav-item">
                   <a class="nav-link active" href="{{route('welcome')}}">HOMEPAGE</a>
               </li>
                {{-- <li class="nav-item">
                    <a class="nav-link active" href="#">MOVIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">GAMES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">CHARACTERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">COLLECTIBLES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">VIDEOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">FANS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">SHOP</a>
                </li> --}}
            </ul>
            <div class="nav_search">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </nav>
</header>