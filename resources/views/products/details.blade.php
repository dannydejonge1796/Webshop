@extends('layout')

@section('current')
      <h5 style="text-align: center; line-height: 50px;">Details</h5>
@endsection

@section('content')

<img style="float: right;" src="{{asset('images/noImg.jpg')}}" alt="Card image cap">
    
@foreach($product as $pro)
    <h1>{{$pro->name}}</h1>
    <p>{{$pro->allDetails}}</p>

    <a href="{{ url('addCart?product=' . $pro->id) }}" class="btn btn-success">Add</a>
        
@endforeach
    
@endsection