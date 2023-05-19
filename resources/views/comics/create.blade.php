@extends('layouts/mainLayout')

@section('content')

    <div class="create text-center">

        <a href="{{route('comics.index')}}">Go Back</a>

    </div>
    
    <form class="form" action="{{route('comics.store')}}" method="POST">
        @csrf


        <label class="lb" for="title">Title:</label>
        <input name="title" id="title" type="text" class="infos form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
        @error('title')
        <div class="invalid-feedback mb-3 mt-0">
            {{$message}}
        </div>
        @enderror
    
        <label for="description" class="lb">Description:</label>
        <input name="description" id="description" type="text" class="infos form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
        @error('description')
        <div class="invalid-feedback mb-3 mt-0">
            {{$message}}
        </div>
        @enderror
    
        <label for="thumb" class="lb">Thumb:</label>
        <textarea name="description" id=description" cols="30" rows="3" class="infos form-control @error('description') is-invalid @enderror" style="background-color: #0282f977; border: none; color: white">{{old('description')}}</textarea>        @error('thumb')
        <div class="invalid-feedback mb-3 mt-0">
            {{$message}}
        </div>
        @enderror

        <label for="price" class="lb">Price:</label>
        <input name="price" id="price" type="text" class="infos form-control @error('price') is-invalid @enderror" step=".01" value="{{old('price')}}">
        @error('price')
        <div class="invalid-feedback mb-3 mt-0">
            {{$message}}
        </div>
        @enderror

        <label for="series" class="lb">Series:</label>
        <input name="series" id="series" type="text" class="infos form-control @error('series') is-invalid @enderror" value="{{old('series')}}">
        @error('series')
        <div class="invalid-feedback mb-3 mt-0">
            {{$message}}
        </div>
        @enderror

        <label for="sale_date" class="lb">Sale Date:</label>
        <input name="sale_date" id="sale_date" type="date" class="infos form-control @error('sale_date') is-invalid @enderror" value="{{old('sale_date')}}">
        @error('sale_date')
        <div class="invalid-feedback mb-3 mt-0">
            {{$message}}
        </div>
        @enderror

        <label for="type" class="lb">Type:</label>
        <input name="type" id="type" type="text" class="infos form-control @error('type') is-invalid @enderror" value="{{old('type')}}">
        @error('type')
        <div class="invalid-feedback mb-3 mt-0">
            {{$message}}
        </div>
        @enderror

        <label for="artists" class="lb">Artists:</label>
        <input name="artists" id="artists" type="text" class="infos form-control @error('artists') is-invalid @enderror" value="{{old('artists')}}">
        @error('artists')
        <div class="invalid-feedback mb-3 mt-0">
            {{$message}}
        </div>
        @enderror

        <label for="writers" class="lb">Writers:</label>
        <input name="writers" id="writers" type="text" class="infos form-control @error('writers') is-invalid @enderror" value="{{old('writers')}}">
        @error('writers')
        <div class="invalid-feedback mb-3 mt-0">
            {{$message}}
        </div>
        @enderror
    
        <button id="send" type="submit">Send</button>
        <button id="limpar" type="reset">Clear </button>
        
    </form>

@endsection