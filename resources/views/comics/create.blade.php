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
                        <input  class="form-control" type="text" name="Title" id="titolo">
                        @error('Title')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="descrizione" class="fs-4 my-2">Description</label>
                        <textarea  class="form-control" type="text" name="Description" id="descrizione" rows="4"></textarea>
                        @error('Description')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="immagine" class="fs-4 my-2">Thumb</label>
                        <input  class="form-control" type="text" name="Thumb" id="immagine">
                        @error('Thumb')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="prezzo" class="fs-4 my-2">Price</label>
                        <input  class="form-control" type="text" name="Price" id="prezzo">
                        @error('Price')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="serie" class="fs-4 my-2">Series</label>
                        <input  class="form-control" type="text" name="Series" id="serie">
                        @error('Series')
                        <div class="text-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="tipo" class="fs-4 my-2">Type</label>
                        <input  class="form-control" type="text" name="Type" id="tipo">
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
