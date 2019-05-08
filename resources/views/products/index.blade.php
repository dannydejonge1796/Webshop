@extends('layout')

@section('content')
    
<div class="row">
    
@foreach($products as $product)
    <div class="col-sm-3">
        <div class="card" style="margin-bottom: 30px;">
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->details}}</p>
            <a href="#" class="btn btn-dark">Details</a>
            <a href="#" class="btn btn-success">Add</a>
          </div>
        </div>
    </div>
@endforeach

</div>

@endsection