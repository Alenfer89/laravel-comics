<header id='index-header' class="my-container">
    <div class="img-wrapper">
        <a href=" {{ route('home') }} ">
            <img src="{{ asset('images/dc-logo.png')}}" alt="DC comics logo">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">CHARACTERS</a></li>
            <li class="active"><a href="{{ route('comics') }}">COMICS</a></li>
            <li><a href="{{ route('home') }}">MOVIES</a></li>
            <li><a href="{{ route('home') }}">TV</a></li>
            <li><a href="{{ route('home') }}">GAMES</a></li>
            <li><a href="{{ route('home') }}">COLLECTIBLES</a></li>
            <li><a href="{{ route('home') }}">VIDEOS</a></li>
            <li><a href="{{ route('home') }}">FANS</a></li>
            <li><a href="{{ route('home') }}">NEWS</a></li>
            <li><a href="{{ route('home') }}">SHOP</a></li>
        </ul>
    </nav>
</header>
<div id="jumbotron"></div>
