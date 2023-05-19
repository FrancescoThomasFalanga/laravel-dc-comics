{{-- MOST IMPORTANT SECTION --}}


{{-- SOME PADDING TO USELESS CONTENT --}}
<div class="bg-blue">

    {{-- SOLITO CONTAINER OFFERTO DAL MIO AMICO BOOTSTRAP --}}
    <div class="container sub">

        {{-- USELESS CONTENT --}}
        <div>
            <span>dc power visa®</span>
        </div>
        <div>
            <span>additional dc sites</span>
        </div>
        {{-- /USELESS CONTENT --}}

    </div>
    {{-- /SOLITO CONTAINER OFFERTO DAL MIO AMICO BOOTSTRAP --}}

</div>
{{-- SOME PADDING TO USELESS CONTENT --}}



{{-- NAV BAR IMPORTANTISSIMAAAAAA --}}
<nav>

    {{-- CONTAINERONE OFFERTO DA BOOTSTRAP --}}
    <div class="container sub">

        {{-- LOGO DC COMICS --}}
        <div class="logo">

            {{-- cliccando il logo ti porterà alla homepage --}}
            <a href="{{ route('homepage') }}">

                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">

            </a>

        </div>
        {{-- /LOGO DC COMICS --}}


        {{-- I VARI LINK IMPORTATI GRAZIE ALLA ROUTE --}}
        <div class="links">

            <ul>

                <li>
                    <a class="{{request()->is('characters') ? 'active' : ''}}" href="{{route('characters')}}">Characters</a>
                </li>
                <li>
                    <a class="{{request()->is('comics') ? 'active' : ''}}" href="{{route('comics.index')}}">Comics</a>
                </li>
                <li>
                    <a class="{{request()->is('movies') ? 'active' : ''}}" href="{{route('movies')}}">Movies</a>
                </li>
                <li>
                    <a class="{{request()->is('tv') ? 'active' : ''}}" href="{{route('tv')}}">Tv</a>
                </li>
                <li>
                    <a class="{{request()->is('games') ? 'active' : ''}}" href="{{route('games')}}">Games</a>
                </li>
                <li>
                    <a class="{{request()->is('collectibles') ? 'active' : ''}}" href="{{route('collectibles')}}">Collectibles</a>
                </li>
                <li>
                    <a class="{{request()->is('videos') ? 'active' : ''}}" href="{{route('videos')}}">Videos</a>
                </li>
                <li>
                    <a class="{{request()->is('fans') ? 'active' : ''}}" href="{{route('fans')}}">Fans</a>
                </li>
                <li>
                    <a class="{{request()->is('news') ? 'active' : ''}}" href="{{route('news')}}">News</a>
                </li>
                <li>
                    <a class="{{request()->is('shop') ? 'active' : ''}}" href="{{route('shop')}}">Shop</a>
                </li>
                {{-- /questo foreach prenderà i vari link importati grazie alla ruote --}}
            </ul>

        </div>
        {{-- /I VARI LINK IMPORTATI GRAZIE ALLA RUOTE --}}


        {{-- SEARCH BUTTON RUBATO SPUDARATAMENTE DA UIVERSE.IO --}}
        <div class="search">
            <div class="search-box">
                <div class="search-field">
                    <input placeholder="Search..." class="input" type="text">
                    <div class="search-box-icon">
                        <button class="btn-icon-content">
                            <i class="search-icon">
                                <svg xmlns="://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" fill="#black"></path></svg>
                            </i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- /SEARCH BUTTON RUBATO SPUDARATAMENTE DA UIVERSE.IO --}}

    </div>
    {{-- /CONTAINERONE OFFERTO DA BOOTSTRAP --}}

</nav>
{{-- /NAV BAR IMPORTANTISSIMAAAAAA --}}



{{-- OPTIMUS PRIME --}}
<div class="jumbotron">

    {{-- SOLITO CONTAINER OFFERTO DALL'AMICO --}}
    <div class="container">

        <h2>CURRENT SERIES</h2>

    </div>
    {{-- SOLITO CONTAINER OFFERTO DALL'AMICO --}}

</div>
{{-- /OPTIMUS PRIME --}}