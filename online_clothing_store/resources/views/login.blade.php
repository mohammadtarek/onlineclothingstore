
<html lang="en">

    <head>
        <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
        {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    </head>
    <body>
        @guest
        <nav class="navbar bg-body-tertiary bg-dark">
            <div class="container-fluid px-5">
              <a class="navbar-brand text-light" href="#">Online Clothing Store</a>
              <a class="btn btn-outline-primary  ms-auto m-2 px-5 py-2 text-ligh " href="{{url('products')}}">Home</a>
              <a class="btn btn-primary  ms-2 px-5 py-2 text-ligh" href="{{url('register')}}">Register</a>
              
            </div>
          </nav>


        <!-- Form -->
        <div class="vh-100 d-flex justify-content-center align-items-center ">
            <div class="col-md-5 p-5 shadow-sm ">
                <h2 class="text-center mb-4 text-primary">Login</h2>
                
                
                <form  method="post" action="{{url('/login/store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="Emailaddress" class="form-label fw-semibold">Email address</label>
                        <input type="email" class="form-control border border-primary" id="Emailaddress"  name="email" 
                        placeholder="Enter Your Email" required maxlength="30" minlength="10">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label fw-semibold" >Password</label>
                        <input name="password" type="password" class="form-control border border-primary" id="Password" name="password"  placeholder="Enter your Password" 
                        minlength="8" maxlength="20" required>
                    </div>
                    <div class="mb-3">
                        <label for="UserType" class="form-label fw-semibold">Role</label>
                        <select name="UserType" class="form-control form-select border border-primary" id="UserType" required>
                            <option value="" selected disabled hidden>Choose User Type</option>
                            <option value="client">Client</option>
                            <option value="supplier">Supplier</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    @if (request()->session()->has('error_msg'))
                    <div class="alert alert-danger" id="errorMsg">
                        <p>{{request()->session()->get('error_msg')}}</p>
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                    <div class="container text-center">
                        <button class="btn btn-primary col-8" type="submit" id="loginBtn">Login</button>
                        {{-- <button class="btn btn-success col-3" type="reset" id="resetBtn">Reset</button> --}}
                    </div>
                </form>
                <div class="mt-3">
                    <p class="mb-0  text-center">You Don't have an account .. 
                        <a href="register"class="text-primary fw-bold">Register</a></p>
                </div>
            </div>
        </div>


        
        <script src="{{ asset('js/main.js') }}"></script>
        @endguest
    </body>


</html>