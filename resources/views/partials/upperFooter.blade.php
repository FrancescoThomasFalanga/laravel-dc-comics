{{-- UPPER FOOTER POCO IMPORTANTE L'UNICA COSA DEGNA DI NOTA E' CHE GRAZIE ALLA ROUTE PASSO I VARI LINKS PER ACCEDERE ALLE DIVERSE SEZIONI DELL'APPLICAZIONE --}}
<div class="upperFooter">

    <div class="container link-img">

        <div class="footer-link">

            
            <div class="flex">

                <div class="sections">
    
                    <strong>DC COMICS</strong>
    
                    <div class="single-section">
    
                        <ul>
    
                            @foreach ($data[2] as $item)
                            <li>
                                {{ $item }}
                            </li>
                            @endforeach
    
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="sections">
    
                    <strong>SHOP</strong>
    
                    <div class="single-section">
    
                        <ul>
    
                            @foreach ($data[5] as $item)
                            <li>
                                {{ $item }}
                            </li>
                            @endforeach
    
                        </ul>
    
                    </div>
    
                </div>

            </div>

            <div class="sections">

                <strong>DC</strong>

                <div class="single-section">

                    <ul>

                        @foreach ($data[3] as $item)
                        <li>
                            {{ $item }}
                        </li>
                        @endforeach

                    </ul>

                </div>

            </div>

            <div class="sections">

                <strong>SITES</strong>

                <div class="single-section">

                    <ul>

                        @foreach ($data[4] as $item)
                        <li>
                            {{ $item }}
                        </li>
                        @endforeach

                    </ul>

                </div>

            </div>

        </div>


        <div class="dc-image">

            <img src="img/dc-logo-bg.png" alt="">

        </div>

    </div>

    <div class="container cookies pb-5">

        <span class="d-block">All Site Content TM and @ 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. All right reserved.</span>
        <a href="">Cookies Settings</a>

    </div>



</div>
{{-- /UPPER FOOTER POCO IMPORTANTE L'UNICA COSA DEGNA DI NOTA E' CHE GRAZIE ALLA ROUTE PASSO I VARI LINKS PER ACCEDERE ALLE DIVERSE SEZIONI DELL'APPLICAZIONE --}}