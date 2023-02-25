@extends('layouts.app')
@section('title', 'Laravel | Edit')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h1>Modifica il tuo Comic</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf 
                    @method('PUT')
                    <div class="form-group my-2">
                        <label for="titolo" class="fs-4 my-2">Title</label>
                        <input  class="form-control" type="text" name="title" id="titolo" value="{{old('title') ?? $comic->title}}">
                        @error('title')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="descrizione" class="fs-4 my-2">Description</label>
                        <textarea  class="form-control" type="text" name="description" id="descrizione" rows="4" value="{{old('description') ?? $comic->description}}"></textarea>
                        @error('description')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="immagine" class="fs-4 my-2">Thumb</label>
                        <input  class="form-control" type="text" name="thumb" id="immagine" value="{{old('thumb') ?? $comic->thumb}}">
                        @error('thumb')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="prezzo" class="fs-4 my-2">Price</label>
                        <input  class="form-control" type="text" name="price" id="prezzo" value="{{old('price') ?? $comic->price}}">
                        @error('price')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="serie" class="fs-4 my-2">Series</label>
                        <input  class="form-control" type="text" name="series" id="serie" value="{{old('series') ?? $comic->series}}">
                        @error('series')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="tipo" class="fs-4 my-2">Type</label>
                        <input  class="form-control" Type="text" name="type" id="tipo" value="{{old('type') ?? $comic->type}}">
                        @error('type')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <button type="sumbit" class="btn btn-success my-3">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
