@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')

<main>
    <h1>Create new Comic</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <section class="container py-4">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <input type="text" id="title" name="title" placeholder="inserisci un titolo" class="form-control my-2">
            <input type="text" id="thumb" name="thumb" placeholder="inserisci un'immagine" class="form-control my-2">
            <input type="text" id="description" name="description" placeholder="inserisci una descrizione" class="form-control my-2">
            <input type="text" id="price" name="price" placeholder="inserisci un prezzo" class="form-control my-2">
            <input type="text" id="type" name="type" placeholder="inserisci data di uscita" class="form-control my-2">
            <input type="text" id="type" name="type" placeholder="inserisci una serie" class="form-control my-2">
            <input type="text" id="type" name="type" placeholder="inserisci un tipo" class="form-control my-2">

            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary ">Reset</button>
        </form>


    </section>
</main>

@endsection
