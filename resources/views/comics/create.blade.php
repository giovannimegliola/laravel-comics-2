@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')

<main>
    <h1>Comic Details</h1>
    <section class="container d-flex align-content-center justify-content-center">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <input type="text" id="title" name="title" placeholder="inserisci un titolo" class="form-control">
            <input type="text" id="description" name="description" placeholder="inserisci una descrizione" class="form-control">
            <input type="text" id="price" name="price" placeholder="inserisci un prezzo" class="form-control">
            <input type="text" id="type" name="type" placeholder="inserisci un tipo" class="form-control">

            <button type="submit">invia</button>
        </form>


    </section>
</main>

@endsection
