@extends('layouts.app')

@section('title', 'Comic detail')

@section('content')

<main>
    <h1>Comic Details</h1>
    <section class="container d-flex align-content-center justify-content-center">
        <div class="row py-4">
            <div class="col-12">
                <div class="card mydetail">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{!! $comic->description !!}</p>
                        <p>
                          Price: {{$comic->price}} | Series: {{$comic->series}} | Sale Date: {{$comic->sale_date}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
