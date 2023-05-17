@extends('layouts/mainLayout')

@section('content')

    <div class="create text-center">

        <a href="{{route('comics.show', $comic->id)}}">Go Back</a>

    </div>
    
    <form class="form" action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')


        <label class="lb" for="title">Title:</label>
        <input name="title" id="title" type="text" class="infos" value="{{$comic->title}}">
    
        <label for="description" class="lb">Description:</label>
        <input name="description" id="description" type="text" class="infos" value="{{$comic->description}}">
    
        <label for="thumb" class="lb">Thumb:</label>
        <input name="thumb" id="thumb" type="text" class="infos" value="{{$comic->thumb}}">

        <label for="price" class="lb">Price:</label>
        <input name="price" id="price" type="number" class="infos" step=".01" value="{{$comic->price}}">

        <label for="series" class="lb">Series:</label>
        <input name="series" id="series" type="text" class="infos" value="{{$comic->series}}">

        <label for="sale_date" class="lb">Sale Date:</label>
        <input name="sale_date" id="sale_date" type="date" class="infos" value="{{$comic->sale_date}}">

        <label for="type" class="lb">Type:</label>
        <input name="type" id="type" type="text" class="infos" value="{{$comic->type}}">

        <label for="artists" class="lb">Artists:</label>
        <input name="artists" id="artists" type="text" class="infos" value="{{$comic->artists}}">

        <label for="writers" class="lb">Writers:</label>
        <input name="writers" id="writers" type="text" class="infos" value="{{$comic->writers}}">
    
        <button id="send" type="submit">Send</button>
        <button id="limpar" type="reset">Clear </button>
        
    </form>

@endsection