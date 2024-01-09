@extends('layouts.app')

@section('title', 'Edit: '.$comic->title)

@section('content')

<main>
    <h1>Update : {{$comic->title}}</h1>
    <section class="container py-4">
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf

            @method('PUT')

            <input type="text" id="title" name="title" value="{{old('title', $comic->title)}}"  placeholder="inserisci un titolo" class="form-control my-2">
            <input type="text" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}" placeholder="inserisci un'immagine" class="form-control my-2">
            <input type="text" id="description" name="description" value="{{old('description', $comic->description)}}" placeholder="inserisci una descrizione" class="form-control my-2">
            <input type="text" id="price" name="price" value="{{old('price', $comic->price)}}" placeholder="inserisci un prezzo" class="form-control my-2">
            <input type="text" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}" placeholder="inserisci data di uscita" class="form-control my-2">
            <input type="text" id="series" name="series" value="{{old('series', $comic->series)}}" placeholder="inserisci una serie" class="form-control my-2">
            <input type="text" id="type" name="type" value="{{old('type', $comic->type)}}" placeholder="inserisci un tipo" class="form-control my-2">

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>


    </section>
</main>

@endsection
