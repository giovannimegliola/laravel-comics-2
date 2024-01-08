@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main>
    <section class="container py-4 ">
        <h1>CURRENT SERIES</h1>
        <div class="row gy-4">
          @foreach ($comics as $comic)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card w-100 h-100">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{!! substr($comic->description, 0, 100) . '...' !!}</p>
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">See details</a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </section>
</main>
@endsection
