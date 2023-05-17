<html lang="en">

<head>
    <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Product page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar bg-body-tertiary bg-dark">
        <div class="container-fluid px-5">
            <a class="navbar-brand text-light" href="{{ url('home') }}">Online Clothing Store</a>
            <a class="btn btn-outline-primary  ms-auto m-2 px-5 py-2 text-ligh " href="{{ url('home') }}">Home</a>
            <a class="btn btn-primary  m-2 px-5 py-2 text-ligh" href="{{ url('logout') }}">Logut</a>
        </div>
    </nav>
<br><br><br><br><br><br>
    <!-- Form -->
    <div class="vh-100 d-flex justify-content-center align-items-center ">
        <div class="col-md-5 p-5 shadow-sm ">
            <h2 class="text-center mb-4 text-primary">Sell Product</h2>
            
            <form method="post" action="{{ url('/sellproduct/add') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Title</label>
                    <input type="text" class="form-control border border-primary " id="title" name="title"
                        placeholder="Product Name" required maxlength="20" minlength="2">
                </div>
                <div class="mb-3">
                    <label for="Discription" class="form-label fw-semibold">Discription</label>
                    <textarea type="text" class="form-control border border-primary" id="Discription" name="Discription"
                        placeholder="write a description" required maxlength="200" minlength="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label fw-semibold">price</label>
                    <input type="number" class="form-control border border-primary " id="price" name="price"
                        placeholder="Enter Price" required min="50" max="10000">
                </div>
                <div class="mb-3">
                    <label for="product size" class="form-label fw-semibold">Size</label>
                    <input type="text" class="form-control border border-primary " id="size"name="size"
                        required>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label fw-semibold">Quantity</label>
                    <input type="number" class="form-control border border-primary " id="quantity"name="quantity"
                        required min="1" max="20">
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label fw-semibold">Product color</label>
                    <input type="text" class="form-control border border-primary "
                        id="color"placeholder="Enter Product Color"name="color" required>
                </div>
                <div class="mb-3">
                    <label for="imagePath" class="form-label fw-semibold">Image Path</label>
                    <input type="text" class="form-control border border-primary "
                        id="imagePath"placeholder="images/1.jpg"name="imagePath" required>
                </div>
                <div class="container text-center">
                    <button class="btn btn-primary col-8" onclick="" type="submit">Add Product</button>
                </div>
            </form>
            @if ($errors->has('p_title'))
                <div class="alert alert-danger">Enter Valid Product Title</div>
            @endif
            @if (request()->session()->has('success_msg'))
                <div class="alert alert-success">{{ request()->session()->get('success_msg') }}</div>
            @endif
        </div>
    </div>

</body>

</html>
