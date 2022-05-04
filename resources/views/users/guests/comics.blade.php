@extends('layouts.app')

@section('title', 'Our Comics')

@section('main-content')
<div id="index-main">
    <div id="product-background">
        <div class="my-container">
            <span>current series</span>
            <div class="product-container">
                @foreach ($comics as $comic)
                    <div class="comic-card">
                        <div class="img-thumb-container">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h5>{{ $comic['title'] }}</h5>
                    </div>
                @endforeach
            </div>
            <button>Load More</button>
        </div>
    </div>
</div>
@endsection

@section('main-content-bottom')
<div id="products-links">
    <div class="my-container">
        {{-- <NavLinks /> --}}
        <nav>
            @foreach ($contentLinks as $link)
                <div class="single-main-link">
                    <div class="img-wrapper">
                        <img src="images/{{ $link['img'] }}" alt="{{ $link['text'] }}">
                    </div>
                    <h5><a href="{{ $link['url'] }}"> {{ $link['text'] }} </a></h5>
                </div>
            @endforeach
            
        </nav>
    </div>
</div>
@endsection