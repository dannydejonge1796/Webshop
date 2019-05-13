@extends('layout')

@section('content')
    
@foreach($product as $pro)
    <h1>{{$pro->name}}</h1>
    <p>{{$pro->allDetails}}</p>
        
@endforeach
    
@endsection