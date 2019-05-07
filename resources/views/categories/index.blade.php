@extends('layout')

@section('content')
    
<div class="row">
    
@foreach($categories as $category)
    <div class="col-sm-2">
        <div class="card" style="margin-bottom: 30px;">
          <div class="card-body">
            <h5 class="card-title">{{$category->name}}</h5>
            <a href="#" class="btn btn-primary">Go</a>
          </div>
        </div>
    </div>
@endforeach

</div>

@endsection