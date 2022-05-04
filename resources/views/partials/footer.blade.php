<div id="index-footer">

    <div class="top-footer-container">
        <div class="top-footer my-container">
            <div class="lists-container">
                @foreach ($links as $key => $link)
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
                @endforeach
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
                <h4>FOLLOW US</h4>
                {{-- <div v-for='(social, index) in socialsLinks' :key='index'>
                    <a :href="social.url"><img :src="require(`../assets/img/${social.img}`)" :alt="social.text"></a>
                </div> --}}
            </div>
        </div>
    </div>

</div>