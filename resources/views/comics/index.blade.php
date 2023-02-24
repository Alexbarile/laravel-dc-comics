@extends('layouts.app')
@section('title', 'Laravel | Comics')
     
@section('content')

{{-- cards --}}

<div class="black-bg">
    <div class="container">
        <div class="row">
            <div class="col-info">
                <h4>Current series</h4>
            </div>
            <div class="mt-5">
                <a href="{{route('comics.create')}}">
                    <button type="button" class="btn btn-primary">Aggiungi Comics</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach($comics as $card)
                <div class="album-card">
                    <a href="{{route('comics.show', ['comic' => $card['id']])}}">
                        {{-- il 'comic' fa riferimento alla route del web.php, al singolare --}}
                    {{-- <a href="{{route ('detail-comics', ['slug' => $card['slug']])}}"></a> --}}
                        <div class="card-img">
                            <img src="{{$card['thumb']}}" alt="">
                        </div>
                        <h3>{{$card['series']}}</h3>  
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button><a href="#">Load More</a></button>
            </div>
        </div>
    </div>
</div>

@endsection
