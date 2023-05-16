@extends('layouts/mainLayout')

@section('content')

    <div class="create text-center">

        <a href="{{route('comics.index')}}">Go Back</a>

    </div>
    
    <form class="form" action="{{route('comics.store')}}" method="POST">
        @csrf


        <label class="lb" for="title">Title:</label>
        <input name="title" id="title" type="text" class="infos">
    
        <label for="description" class="lb">Description:</label>
        <input name="description" id="description" type="text" class="infos">
    
        <label for="thumb" class="lb">Thumb:</label>
        <input name="thumb" id="thumb" type="text" class="infos">

        <label for="price" class="lb">Price:</label>
        <input name="price" id="price" type="text" class="infos">

        <label for="series" class="lb">Series:</label>
        <input name="series" id="series" type="text" class="infos">

        <label for="sale_date" class="lb">Sale Date:</label>
        <input name="sale_date" id="sale_date" type="text" class="infos">

        <label for="type" class="lb">Type:</label>
        <input name="type" id="type" type="text" class="infos">

        <label for="artists" class="lb">Artists:</label>
        <input name="artists" id="artists" type="text" class="infos">

        <label for="writers" class="lb">Writers:</label>
        <input name="writers" id="writers" type="text" class="infos">
    
        <button id="send" type="submit">Send</button>
        <button id="limpar" type="reset">Clear </button>
    </form>

@endsection