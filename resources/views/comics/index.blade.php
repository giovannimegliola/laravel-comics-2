@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main>
    <section class="container py-4 ">
        <h1>CURRENT SERIES</h1>

        <a href="{{route('comics.create')}}" class="btn btn-primary my-3">Crea nuovo Fumetto</a>

        @if (session()->has('message'))
        <div class="alert alert-success">{{ session()->get('message') }}</div>
        @endif

        <div class="row gy-4">
          @foreach ($comics as $comic)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card w-100 h-100">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{!! substr($comic->description, 0, 100) . '...' !!}</p>
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">See details</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>

                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </section>
</main>
@endsection
