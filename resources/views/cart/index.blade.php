@extends('layout')

@section('current')
      <h5 style="text-align: center; line-height: 50px;">Shopping Cart</h5>
@endsection

@section('content')

@if(Session::has('cart'))

<div class="col-sm-12">
	<div class="card" style="margin-bottom: 30px; border-radius: 20px;">
		<table class="table">
			<thead>
				<tr>		
					<th>Product</th>
					<th>Quantity</th>
					<th>Delete</th>
					<th>Price</th>
				</tr>
			</thead>

			<tbody>
		
			@foreach($products as $product)

			    <tr>
				    <td class="col-sm-6">{{ $product['name'] }}</td>
				    <td class="col-sm-2">{{ $product['quantity'] }} <i style="color: gray" class="fas fa-arrow-up"></i> <i style="color: gray;" class="fas fa-arrow-down"></i></td>
				    <td class="col-sm-2">    
				    	<div class="btn-group">
							<a href="#"><i  style="color: darkred" class="far fa-trash-alt"></i></a>
						</div>
					</td>
				    <td class="col-sm-2">€ {{ $product['subtotal'] }}</td>
			    </tr>
		
			@endforeach

				<tr>
					<td><strong>Total</strong></td>
					<td><strong>{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</strong></td>
					<td>
						<div class="btn-group">
							<a href="{{ url('kill') }}"><i  style="color: darkred" class="far fa-trash-alt"></i></a>
						</div>
					</td>
					<td><strong>€ {{$totalPrice}} </strong></td>		
				</tr>

			</tbody>

		</table>

		<button type="button" class="btn btn-success">Checkout</button>
	</div>
</div>

@else

<h1>No items in cart</h1>

@endif

@endsection