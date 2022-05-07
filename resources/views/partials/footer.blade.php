<div id="index-footer">

    <div class="top-footer-container">
        <div class="top-footer my-container">
            {{-- <div class="lists-container">
                @foreach ($links as $key => $link)
                    @if ($key !== array_key_last($links))
                        <div class="list-wrapper">
                            <h4> {{ $key }}</h4>
                            <ul>
                                @foreach ($link as $linkSpecific)
                                    <li>
                                        <a href="{{ $linkSpecific['url'] }}">
                                            {{ $linkSpecific['text'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endforeach
            </div> --}}
            <div class="lists-container">
                <div class="list-wrapper">
                    @foreach ($links as $key => $link)
                        @if ($key === 'shop' || $key === 'dc Comics')
                            <h4> {{ $key }}</h4>
                            <ul>
                                @foreach ($link as $linkSpecific)
                                    <li>
                                        <a href="{{ $linkSpecific['url'] }}">
                                            {{ $linkSpecific['text'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
                <div class="list-wrapper">
                    @foreach ($links as $key => $link)
                        @if ($key === 'dc')
                            <h4> {{ $key }}</h4>
                            <ul>
                                @foreach ($link as $linkSpecific)
                                    <li>
                                        <a href="{{ $linkSpecific['url'] }}">
                                            {{ $linkSpecific['text'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
                <div class="list-wrapper">
                    @foreach ($links as $key => $link)
                        @if ($key === 'sites')
                            <h4> {{ $key }}</h4>
                            <ul>
                                @foreach ($link as $linkSpecific)
                                    <li>
                                        <a href="{{ $linkSpecific['url'] }}">
                                            {{ $linkSpecific['text'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
            </div>
            <div id="logo-background">
            </div>
        </div>
    </div>

    <div class="bot-footer-container">
        <div class="bot-footer my-container">
            <div>
                <button>SIGN-UP NOW!</button>
            </div>
            <div class="socials-container">
                <h4>follow us</h4>
                @foreach ($links as $key => $socialsLink)
                    @if ($key == array_key_last($links))
                        @foreach ($socialsLink as $singleSocial)
                            <div>
                                <a href="{{ $singleSocial['url'] }}"><img src="{{asset("images/". $singleSocial['img']) }}" alt="{{ $singleSocial['text'] }}"></a>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </div>

</div>