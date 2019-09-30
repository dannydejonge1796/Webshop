@extends('layout')

@section('current')
      <h5 style="text-align: center; line-height: 50px;">Orders</h5>
@endsection

@section('content')

	<div class="col-sm-12">
	<div class="card" style="margin-bottom: 30px; border-radius: 20px;">
		<table class="table">
			<thead>
				<tr>		
					<th>Order number</th>
					<th>User</th>
					<th>Products</th>
				</tr>
			</thead>

			<tbody>
		
			@foreach($orders as $order)
			
			    <tr>
				    <td>{{ $order['number'] }}</td>
				    <td>{{ $order['user_id'] }}</td>
				    <td>{{ $order['product_id'] }}</td>
			    </tr>
		
			@endforeach

			</tbody>
		</table>
	</div>
</div>

@endsection
