@extends('layout')

@section('current')
      <h5 style="text-align: center; line-height: 50px;">Everything</h5>
@endsection


@section('content')
    
<div class="row">
    
@foreach($products as $product)
    <div class="col-sm-3">
        <div class="card" style="margin-bottom: 30px; border-radius: 20px;">
            <div class="card-header"><b>{{$product->name}}</b><p class="price" style="float: right;text-align: right;margin-bottom: 0;"><b>€{{$product->price}}</b></p></div>
            <img class="card-img-top" src="{{asset('images/noImg.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <a href="{{ url('details?product=' . $product->id) }}" class="btn btn-dark">Details</a>
                <a href="{{ url('addCart?product=' . $product->id) }}" class="btn btn-success">Add</a>
            </div>
        </div>
    </div>
@endforeach

</div>

@endsection