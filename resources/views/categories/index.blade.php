@extends('layout')

@section('content')
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Webshop</a>
</nav>
    
@foreach($categories as $category)
    
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$category->name}}</h5>
        <a href="#" class="btn btn-primary">Go</a>
      </div>
    </div>
    
@endforeach

@endsection