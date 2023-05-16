{{-- SEMI IMPORTANT SECTION --}}

@extends('layouts/mainLayout')

@section('content')

{{-- only a background color --}}
<div class="bg-grey">

    {{-- CONTAINER OFFERTO DA BOOTSTRAP --}}
    <div class="container">

        <div class="create">

            <a href="{{route('comics.create')}}">Add Comic</a>

        </div>

        {{-- ROW THAT CONTAINS ALL THE CARD --}}
        <div class="row comic-card">


            {{-- GRAZIE A QUESTO FOREACH SONO IN GRADO DI IMPORTARE IL DATABASE $COMICS PASSATO TRAMITE CONFI() ALLA ROUTE --}}
            @foreach ($comics as $comic)

            <div class="col-2 comic-inner">

                {{-- href = porto tizio a quella route che sarà /action-comics e a quell'URL si andrà ad aggiungere anche l'$index dell'immagine che sto andando a cliccare --}}
                <a href="{{route('comics.show', $comic->id)}}">

                    <img src="{{ $comic['thumb'] }}" alt="IMG">

                </a>

                {{ $comic['series'] }}

            </div>

            @endforeach
            {{-- /GRAZIE A QUESTO FOREACH SONO IN GRADO DI IMPORTARE IL DATABASE $COMICS PASSATO TRAMITE CONFIG() ALLA ROUTE --}}


        </div>
        {{-- /ROW THAT CONTAINS ALL THE CARD --}}

    </div>
    {{-- /CONTAINER OFFERTO DA BOOTSTRAP --}}


    {{-- ALTRO CONTAINER OFFERTO DA BOOTSTRAP --}}
    <div class="container more-content">

        {{-- BUTTON FOR LOAD MORE CONTENT --}}
        <button>
            LOAD MORE
        </button>
        {{-- /BUTTON FOR LOAD MORE CONTENT --}}

    </div>
    {{-- ALTRO CONTAINER OFFERTO DA BOOTSTRAP --}}

</div>
{{-- /only a background color --}}

@endsection