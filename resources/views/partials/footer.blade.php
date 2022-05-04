<div id="index-footer">

    <div class="top-footer-container">
        <div class="top-footer my-container">
            <div class="lists-container">
                <div class="list-wrapper">
                    <h4>DC COMICS</h4>
                    <ul>
                        @foreach ($links as $link)
                            <li>
                                
                                @dump($link)
                            </li>
                        @endforeach
                        
                    </ul>
                    <h4>SHOP</h4>
                    <ul>
                        {{-- <li v-for='(element, index) in shop' :key='index'>
                            <a :href="element.url"> {{ element.link }} </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="list-wrapper">
                    <h4>DC</h4>
                    <ul>
                        {{-- <li v-for='(element, index) in dc' :key='index'>
                            <a :href="element.url"> {{ element.link }} </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="list-wrapper">
                    <h4>SITES</h4>
                    <ul>
                        {{-- <li v-for='(element, index) in dc' :key='index'>
                            <a :href="element.url"> {{ element.link }} </a>
                        </li> --}}
                    </ul>
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
                <h4>FOLLOW US</h4>
                {{-- <div v-for='(social, index) in socialsLinks' :key='index'>
                    <a :href="social.url"><img :src="require(`../assets/img/${social.img}`)" :alt="social.text"></a>
                </div> --}}
            </div>
        </div>
    </div>

</div>