@extends('layouts.app')
@section('title', 'Laravel | Homepage')

@section('content')
<div class="d-flex justify-content-center p-5">
    <a href="{{route('comics.index')}}">
      <button type="button" class="btn btn-primary">Mostra Comics</button>
    </a>
  </div>
@endsection