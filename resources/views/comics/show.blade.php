{{-- IMPORTANT SECTION --}}

{{-- L'UNICA COSA STRANA CHE SON ANDATO A FARE QUI, E' STATA QUELLA DI AGGIUNGERE L'$INDEX IN OGNI PASSAGGIO DI $COMICS, COSI' CHE OGNI VOLTA
CHE VADO A CLICCARE QUELLA DETERMINATA IMMAGINE (VEDI comics.blade.php) AL MIO URL COME QUERY VERRA' PASSATO L'$INDEX --}}

@extends('layouts/mainLayout')

@section('content')

  <div class="bg-blue-terziary">

    <div class="container single-thumb">

      <img src="{{ $comic->thumb }}" alt="">

    </div>

  </div>

  <div class="bordino">
    
    <div class="info-flex">

      <div class="container">

        <div class="principal">
        
          <div class="title">
        
            <h2>{{ $comic->title }}</h2>
        
          </div>
        
          <div class="price">
        
            <div class="left">
        
              <span class="us">U.S. Price: <strong>{{ $comic->price }}</strong></span>
        
              <span class="available">AVAILABLE</span>
        
            </div>
        
            <div class="right">
        
              <span>Check Availability</span>
        
            </div>
        
          </div>
        
          <div class="desc">
        
            <p>{{ $comic->description }}</p>
        
          </div>
        
        </div>
        
        <div class="random">
        
          <div class="random-text">
        
            <span>ADVERTISEMENT</span>
        
          </div>
        
          <div class="random-img">
        
            <img class="d-block" src="{{ asset('img/nunMeLaCarica.jpg') }}" alt="">
        
          </div>
        
        </div>

      </div>
    
    </div>

    <div class="row container mi-serve" style="margin: auto">

      <div class="talent col-7">
        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Talent</th>
            </tr>
          </thead>

          <tbody class="table-group-divider" style="border-color: #dee2e6;">
            <tr>
              <th scope="row" colspan="2">Art by:</th>
              <td style="padding-left: 100px">

                {{$comic->artists}}

              </td>
            </tr>
            <tr>
              <th scope="row" colspan="2">Written by:</th>
              <td style="padding-left: 100px">

                {{$comic->writers}}

              </td>
            </tr>
          </tbody>
        </table>
        
      </div>

      <div class="specs col-5">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Specs</th>
            </tr>
          </thead>
          <tbody class="table-group-divider" style="border-color: #dee2e6;">
            <tr>
              <th scope="row">Series:</th>
              <td> <a href="">{{$comic->series}}</a></td>
            </tr>
            <tr>
              <th scope="row">U.S. Price:</th>
              <td>{{$comic->price}}</td>
            </tr>
            <tr>
              <th scope="row">On Sale</th>
              <td>{{$comic->sale_date}}</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>

  </div>

@endsection