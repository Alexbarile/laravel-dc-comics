@extends('layouts.app')
@section('title', 'Laravel | Forms')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf 
                    
                    <div class="form-group my-2">
                        <label for="titolo" class="fs-4 my-2">title</label>
                        <input  class="form-control" type="text" name="title" id="titolo">
                    </div>
                    <div class="form-group my-2">
                        <label for="descrizione" class="fs-4 my-2">description</label>
                        <textarea  class="form-control" type="text" name="description" id="descrizione" rows="4"></textarea>
                    </div>
                    <div class="form-group my-2">
                        <label for="immagine" class="fs-4 my-2">thumb</label>
                        <input  class="form-control" type="text" name="thumb" id="immagine">
                    </div>
                    <div class="form-group my-2">
                        <label for="prezzo" class="fs-4 my-2">price</label>
                        <input  class="form-control" type="text" name="price" id="prezzo">
                    </div>
                    <div class="form-group my-2">
                        <label for="serie" class="fs-4 my-2">series</label>
                        <input  class="form-control" type="text" name="series" id="serie">
                    </div>
                    <div class="form-group my-2">
                        <label for="tipo" class="fs-4 my-2">type</label>
                        <input  class="form-control" type="text" name="type" id="tipo">
                    </div>
                    <button type="sumbit" class="btn btn-success my-3">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection
