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
                        <input  class="form-control" type="text" name="Title" id="titolo" value="{{old('Title') ?? $comic->Title}}">
                        @error('Title')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="descrizione" class="fs-4 my-2">Description</label>
                        <textarea  class="form-control" type="text" name="Description" id="descrizione" rows="4" value="{{old('Description') ?? $comic->Description}}"></textarea>
                        @error('Description')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="immagine" class="fs-4 my-2">Thumb</label>
                        <input  class="form-control" type="text" name="Thumb" id="immagine" value="{{old('Thumb') ?? $comic->Thumb}}">
                        @error('Thumb')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="prezzo" class="fs-4 my-2">Price</label>
                        <input  class="form-control" type="text" name="Price" id="prezzo" value="{{old('Price') ?? $comic->Price}}">
                        @error('Price')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="serie" class="fs-4 my-2">Series</label>
                        <input  class="form-control" type="text" name="Series" id="serie" value="{{old('Series') ?? $comic->Series}}">
                        @error('Series')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="tipo" class="fs-4 my-2">Type</label>
                        <input  class="form-control" Type="text" name="Type" id="tipo" value="{{old('Type') ?? $comic->Type}}">
                        @error('Type')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <button type="sumbit" class="btn btn-success my-3">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
