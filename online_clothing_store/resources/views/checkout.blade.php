
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

  <body>

    <nav class="navbar bg-body-tertiary bg-dark">
      <div class="container-fluid px-5">
        <a class="navbar-brand text-light" href="Home.html">Online Clothing Store</a>
        <a class="btn btn-outline-primary  ms-auto m-2 px-5 py-2 text-ligh " href="{{url('home')}}">Home</a>
        <a class="btn btn-primary  ms-2 px-5 py-2 text-ligh" href="{{url('logout')}}">Logout</a> 
      </div>
    </nav>

    <div class="container">
        <div class="py-5 text-center ">
          <h1>Checkout</h1>
        </div>
      
        <div class="row ">
          <div class="col-md-6 order-md-2 ">
            <h4 class="d-flex justify-content-center align-items-center mb-3">
              <span class="text-muted">Your cart</span>
              <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                @php
                $totalprice = 0;
                @endphp

                @foreach ($products as $product)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">{{$product->p_title}}</h6>
                      <small class="text-muted">{{$product->p_desc}}</small>
                    </div>
                    <span class="text-muted">{{$product->p_price}}</span>
                    
                  </li>
                @php
                    $totalprice += $product->p_price;
                @endphp
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>{{$totalprice}}</strong>
                </li>
{{-- 
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$15</span>
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>$20</strong>
              </li> --}}
            </ul>
          </div>

          <div class="col-md-6 order-md-1 text-center">
              <h4 class="d-flex justify-content-center align-items-center mb-3 text-muted">Payment Method</h4>
              <div class="input-group mb-3">
                <label class="input-group-text" for="paymentMethod">Payment Method</label>
                <select class="form-select" id="paymentMethod">
                  <option selected>Choose...</option>
                  <option value="1">Cash</option>
                </select>
              </div>
              <form method="POST" action="{{ url('/checkout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-primary btn-lg w-50">Success</button>
              </form>
              

          </div>
          
        </div>
      

      </div>
  </body>


</html>