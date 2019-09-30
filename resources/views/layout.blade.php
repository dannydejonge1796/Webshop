<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('products') }}">Webshop</a>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
            <a style="outline: none;" href="{{ url('orders') }}">
                 <i style="color: white; margin-left: 20px;;" class="fas fa-clipboard-list"></i>
            </a>
        </li>

        <li class="nav-item active">
            <a style="outline: none;" href="{{ url('cart') }}">
                <i style="color: white; margin-left: 20px;;" class="fas fa-shopping-cart"></i>
                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
            </a>
        </li>
        
        <li class="nav-item active">
            <a style="outline: none;" href="{{ url('home') }}">
                <i style="color: white; margin-left: 20px;" class="far fa-user-circle"></i>
            </a>
        </li>
    </ul>
</nav>

<div class="wrapper" style="margin: 25px;">
    <div class="side" style="float: left; width: 22%;">
        <div style="border: 1px solid lightgray; width: 15rem; height: 50px; margin-bottom: 10px; border-radius: 20px;">
          
            @yield('current')

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