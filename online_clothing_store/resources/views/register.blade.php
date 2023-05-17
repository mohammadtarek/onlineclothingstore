
<html lang="en">

    <head>
        <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registeration page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        @guest
        <nav class="navbar bg-body-tertiary bg-dark">
            <div class="container-fluid px-5">
              <a class="navbar-brand text-light">Online Clothing Store</a>
              <a class="btn btn-outline-primary  ms-auto m-2 px-5 py-2 text-ligh " href="products">Home</a>
              <a class="btn btn-primary  ms-2 px-5 py-2 text-ligh" href="login">Login</a>
              
            </div>
          </nav>


        <!-- Form -->
        <div class="vh-100 d-flex justify-content-center align-items-center ">
            <div class="container text-center shadow-sm ">
                <h2 class="text-center mb-4 text-primary">Register</h2>
                <form method="POST" action="{{url('/register/store')}}">
                    @csrf
                    <div class="row ">
                        <div class="col">
                            <div class="row mb-3">
                                <label for="firstName" class="form-label fw-semibold">First Name</label>
                                <div class="">
                                    <input type="text" name="name" class="form-control border border-primary" id="firstName"  name="firstName" 
                                    placeholder="Enter First Name" required maxlength="20" minlength="2">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                <label for="address" class="form-label fw-semibold ">Address</label>
                                <div  class="">
                                    <input type="text" name="address" class="form-control border border-primary" id="address" placeholder="Enter Address" 
                                     name="address" minlength="10" maxlength="50" required>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col">
                            <div class="row mb-3">
                                <label for="lastName" class="form-label fw-semibold ">Last Name</label>
                                <div class="">
                                    <input type="text" name="lastname" class="form-control border border-primary" id="lastName"  name="lastName" 
                                    placeholder="Enter last Name" required maxlength="20" minlength="2">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                <label for="dateOfBirth" class="form-label fw-semibold ">DOB</label>
                                <div class="">
                                    <input type="date" name="dofbirth" class="form-control border border-primary" id="dateOfBirth" name="dateOfBirth" required>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col">
                            <div class="row mb-3">
                                <label for="emailAddress" class="form-label fw-semibold ">Email address</label>
                                <div class="">
                                    <input type="email" name="email" class="form-control border border-primary" id="emailAddress"  name="email" 
                                    placeholder="Enter Email" required maxlength="35" minlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                <label for="Password" class="form-label fw-semibold ">Password</label>
                                <div  class="">
                                    <input type="password" name="password" class="form-control border border-primary" id="Password" placeholder="Enter Password" 
                                    name="password" minlength="8" maxlength="20" required>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col">
                            <div class="row mb-3">
                                <label for="phone" class="form-label fw-semibold ">Phone</label>
                                <div class="">
                                    <input type="number" name="phone" class="form-control border border-primary" id="phone"  name="phone" 
                                    placeholder="Enter Phone number" required maxlength="11" >
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                <label for="confirmPassword" class="form-label fw-semibold ">Confirm Password</label>
                                <div  class="">
                                    <input type="password" name="confirmpass" class="form-control border border-primary" id="confirmPassword" placeholder="Re-Enter Password" 
                                     name = "confirmpass" minlength="8" maxlength="20" required>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col">
                            <div class="row mb-3">
                                <label for="phone" class="form-label fw-semibold ">Role</label>
                                <div class="">
                                    <select name="UserType" class="form-control form-select border border-primary" id="UserType" required>
                                        <option value="client">Client</option>
                                        <option value="supplier">Supplier</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                <label for="gender" class="form-label fw-semibold ">Gender</label>
                                <div class="">
                                    <select name="gender" class="form-control form-select border border-primary" id="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3 errorMsg" id="errorMsg">
                            <p>Please Enter Correct Data</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary col-6 mt-4 " type="submit" onclick="validateRegister()" >Register</button>
                        </div>
                    </div>
                </form>
                @if (request()->session()->has('error_msg'))
                <div class="alert alert-danger" id="errorMsg">
                    <p>{{request()->session()->get('error_msg')}}</p>
                    <a href="login"class="text-primary fw-bold">Login</a></p>
                </div>
                @endif
                
            </div>
        </div>

        <script src="{{ asset('js/Register.js') }}"></script>
        @endguest
    </body>

</html>