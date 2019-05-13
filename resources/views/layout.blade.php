<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('products') }}">Webshop</a>
</nav>
    
<div class="wrapper" style="margin: 25px;">
    <div class="side" style="float: left; width: 22%;">
        <div class="card" style="width: 15rem; margin-bottom: 10px; border-radius: 20px;">
            <div class="card-body">
                <h5 class="card-title">Everything</h5>
            </div>
        </div>
        @foreach($categories as $category)
            <div class="card" style="width: 15rem; margin-bottom: 10px; border-radius: 20px;">
                <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                    <a href="{{ url('products?category=' . $category->id) }}" class="btn btn-success">Go</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="content" style="float: right; width: 78%;">
        @yield('content')
    </div>
</div>
    
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>