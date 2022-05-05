@extends('layouts.app')

@section('title', '- Our Comics')

@section('main-content')
<div id="comic">
    <section class="comic-header">
        <div class="ax-comic-container">
    
        </div>
    </section>
    
    <section class="top-comic">
        <div class="ax-comic-container">
            <div class="ax-row">
                <div class="ax-col-6">
                    <h1> {{ $comic['title'] }} </h1>
                    <div class="comic-price">
                        {{ $comic['price'] }}
                    </div>
                    <p> {{ $comic['description'] }} </p>
                </div>
                <div class="ax-col-4">
                    <img src="{{asset('images/lalala.jpg')}}" alt="buy">
                </div>
            </div>
            
        </div>
    </section>
    
    <section class="bot-comic">
        <div class="ax-comic-container">
    
        </div>
    </section>
</div>
@dump($comic)
@endsection