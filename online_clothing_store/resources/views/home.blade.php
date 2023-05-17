
<html lang="en">

    <head>
      <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

  <body>
    
        
    
      <!-- Start Header -->
      <div class="home" id="home">
        <header class="layer">
          <nav class="navbar bg-body-tertiary home-nav">
            <div class="container-fluid ">  
                <a class="navbar-brand text-light">Online Clothing Store</a>
                <a class="btn btn-outline-primary  ms-auto m-2 px-5 py-2 text-ligh " href="{{url('/addtocart')}}">Cart</a>
                <a class="btn btn-outline-primary  m-2 px-5 py-2 text-ligh" href="UserHistory-Client.html">View History</a>
                <a class="btn btn-outline-success  m-2 px-5 py-2 text-ligh" href="{{url('/sellproduct')}}">Sell Product</a>
                <a class="btn btn-primary  m-2 px-5 py-2 text-ligh" href="{{url('logout')}}">Logout</a>
                
          </nav>
          <div class="landing">
            <div class="text-center">
              <h1>Online Clothing Store</h1>
            </div>
          </div>
        </header>
      </div>
      <!-- End Header -->

      <!--Portfolio Section-->

  <div class="container py-5">
    <div class="row g-2  d-flex">
      @foreach ($products as $product)
      <div class="col-md-4">
        <div class="item">
          <img src="{{ asset($product->p_photo) }}" alt="image1" class="w-100">
          <div class="item-caption ">
            <p>{{$product->p_title}}</p>
            <h4 class="fw-bolder">Price</h4>
            <p>{{$product->p_price}}</p>

          <form method="POST" action="{{url('/addtocart/add')}}">
            @csrf
            <input type="hidden" name="addcart" value="{{ $product->p_title }}">
            <button class="btn btn-outline-primary py-2 px-5" type="submit">Add to Cart</button>
          </form>
         
          
          </div>
        </div>
      </div>
      @endforeach
      
  </body>


</html>