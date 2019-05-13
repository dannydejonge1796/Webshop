@extends('layout')

@section('content')
    
<div class="row">
    
@foreach($products as $product)
    <div class="col-sm-3">
        <div class="card" style="margin-bottom: 30px; border-radius: 20px;">
            <div class="card-header"><b>{{$product->name}}</b></div>
            <img class="card-img-top" src="{{asset('images/noImg.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <a href="{{ url('details?product=' . $product->id) }}" class="btn btn-dark">Details</a>
                <a href="#" class="btn btn-success">Add</a>
            </div>
        </div>
    </div>
@endforeach

</div>

@endsection