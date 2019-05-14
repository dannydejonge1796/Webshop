@extends('layout')

@section('content')

<img style="float: right;" src="{{asset('images/noImg.jpg')}}" alt="Card image cap">
    
@foreach($product as $pro)
    <h1>{{$pro->name}}</h1>
    <p>{{$pro->allDetails}}</p>
        
@endforeach
    
@endsection