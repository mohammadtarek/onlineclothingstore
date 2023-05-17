<html lang="en">

<head>
    <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Control</title>
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
            <a class="navbar-brand text-light">Online Clothing Store</a>
            <a class="btn btn-primary  ms-auto  px-5 text-ligh" href="{{ url('adminpanel') }}">Admin Panel</a>
            <a class="btn btn-primary  m-2 me-4 px-5 text-ligh" href="{{ url('logout') }}">Logout</a>
            <a>  <img src="{{ asset('images/admin.png') }}" alt="Admin" width="50" height="50"></a>

        </div>
    </nav>




    <!-- Delete user form-->
    <div class="vh-100 d-flex justify-content-center align-items-center ">
        <div class="col-md-5 p-5 shadow-sm ">
            <h2 class="text-center mb-4 text-primary">Product Control</h2>
            <form  method="post" action="{{ url('/productcontrol/delete') }}">
                @csrf
                <div class="mb-3">
                    <label for="productTitle" class="form-label fw-semibold">Product Title</label>
                    <input type="text" name="productTitle" class="form-control border border-primary" id="productTitle"  
                    placeholder="Enter Product Title Here" required maxlength="30" minlength="10">
                </div>

                @if (request()->session()->has('success_msg'))
                <div class="alert alert-success">{{ request()->session()->get('success_msg') }}</div>
            @endif
            @if (request()->session()->has('error_msg'))
                <div class="alert alert-danger" id="errorMsg">
                    <p>{{ request()->session()->get('error_msg') }}</p>
                </div>
            @endif
                <div class="container text-center">
                    <button class="btn btn-primary col-4 p-3" onclick="deleteProduct()" type="submit" id="deleteProductBtn">Delete Product</button>
                </div>
            </form>

        </div>
    </div>



</body>

</html>