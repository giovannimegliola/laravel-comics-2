@extends('layouts.app')

@section('title', 'Edit: '.$comic->title)

@section('content')

<main>
    <h1>Update : {{$comic->title}}</h1>
    <section class="container py-4">
        <form action="{{route('comics.update')}}" method="POST">
            @csrf

            @method('PUT')

            <input type="text" id="title" name="title" value="{{$comic->title}}" placeholder="inserisci un titolo" class="form-control my-2">
            <input type="text" id="thumb" name="thumb" placeholder="inserisci un'immagine" class="form-control my-2">
            <input type="text" id="description" name="description" placeholder="inserisci una descrizione" class="form-control my-2">
            <input type="text" id="price" name="price" placeholder="inserisci un prezzo" class="form-control my-2">
            <input type="text" id="type" name="type" placeholder="inserisci un tipo" class="form-control my-2">

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>


    </section>
</main>

@endsection
