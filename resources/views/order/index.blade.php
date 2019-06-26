@extends('layout')

@section('current')
      <h5 style="text-align: center; line-height: 50px;">Orders</h5>
@endsection

@section('content')

	@foreach($orders as $order)

		<h5>Price</h5>
		<p>{{$order->product_id}}</p>
		<h5>Products</h5>
		<p>{{$order->product_id}}</p>
		<br>
		<br>


	@endforeach

@endsection