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
            <div class="ax-row">
                <div class="ax-col-5">
                    <h3>Talent</h3>
                    <p></p>
                    <p>Art By:
                        <span>
                            @foreach ($comic['artists'] as $index => $artist)
                                @if($index !== array_key_last($comic['artists']))
                                    {{$artist . ', '}}
                                @elseif($index == array_key_last($comic['artists']))
                                <?php echo $artist . '.'; ?>
                                @endif
                            @endforeach
                        </span>
                    </p>
                    <p>Written By:
                        <span>
                            @foreach ($comic['writers'] as $index => $artist)
                                @if($index !== array_key_last($comic['writers']))
                                    <?php echo $artist . ', '; ?> 
                                @elseif($index == array_key_last($comic['writers']))
                                    <?php echo $artist . '.'; ?>
                                @endif
                            @endforeach
                        </span>
                        
                    </p>
                </div>
                <div class="ax-col-5">
                    <h3>Specs</h3>
                    <p></p>
                    <p>
                        Series:
                        <span>
                            {{ $comic['series'] }}
                        </span>
                    </p>
                    <p>
                        US Price:
                        <span>
                            {{ $comic['price'] }}
                        </span>
                    </p>
                    <p>
                        On Sale date:
                        <span>
                            {{ $comic['sale_date'] }}
                        </span>
                    </p>
                </div>
            </div>
            
        </div>
    </section>
</div>
@dump($comic['artists'])
@endsection