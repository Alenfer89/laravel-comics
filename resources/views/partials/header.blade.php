<header id='index-header' class="">
    <section class="top-header">
        <div class="my-container">

        </div>
    </section>
    <section class="bot-header my-container">
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
            {{-- <div>
                <input type="text" placeholder="Search">
            </div> --}}
        </nav>
        <div class="input-group">
            <button class="" type="button" id="button-addon1">Search</button>
            <input type="text" class="form-control" placeholder="Start a search" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
    </section>
</header>
<div id="jumbotron"></div>
