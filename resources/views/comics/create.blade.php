@extends('layouts.app')
@section('title', 'Laravel | Forms')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h1>Crea un nuovo Comic</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf 
                    <div class="form-group my-2">
                        <label for="titolo" class="fs-4 my-2">Title</label>
                        <input  class="form-control" type="text" name="title" id="titolo">
                        @error('title')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="descrizione" class="fs-4 my-2">Description</label>
                        <textarea  class="form-control" type="text" name="description" id="descrizione" rows="4"></textarea>
                        @error('description')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="immagine" class="fs-4 my-2">Thumb</label>
                        <input  class="form-control" type="text" name="thumb" id="immagine">
                        @error('thumb')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="prezzo" class="fs-4 my-2">Price</label>
                        <input  class="form-control" type="text" name="price" id="prezzo">
                        @error('price')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="serie" class="fs-4 my-2">Series</label>
                        <input  class="form-control" type="text" name="series" id="serie">
                        @error('series')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="tipo" class="fs-4 my-2">Type</label>
                        <input  class="form-control" type="text" name="type" id="tipo">
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
