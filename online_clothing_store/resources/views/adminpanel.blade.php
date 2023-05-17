<html lang="en">

<head>
    <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
            <a class="navbar-brand text-light" href="AdminPanel.html">Online Clothing Store</a>
            <a class="btn btn-primary  ms-auto me-4 px-5 text-ligh" href="{{url('logout')}}">Logout</a>
            <a><img src="{{ asset('images/admin.png') }}" alt="Admin" width="50" height="50"></a>

        </div>
    </nav>
    <br><br>
    <h2 class="text-center mb-4 text-primary">Admin Panel</h2>


    <br><br>
    <!-- Buttons-->
    <div class="container text-center">

        <div class="row  text-center">
            <div class="col">
                <a class="btn btn-primary col-4 p-4 mt-3" href="{{url('deleteuser')}}" id="deleteBtn">Delete User</a>
            </div>

            <div class="col">
                <a class="btn btn-primary col-4 p-4 mt-3" href="{{url('adduser')}}" id="addBtn">Add User</a>
            </div>
        </div>
        <br><br><br>
        <div class="row  text-center">
            <div class="col">
                <a class="btn btn-primary col-4 p-4 mt-3" href="adminViewHistory.html" id="viewHistoryBtn">View User History</a>
            </div>

            <div class="col">
                <a class="btn btn-primary col-4 p-4 mt-3" href="{{url('blockuser')}}" id="blockBtn">Block User</a>
            </div>
        </div> 
    </div>
    


    <br><br><br>

    <div class="container text-center">
        <a class="btn btn-primary col-2 p-4 mt-4"  href="{{url('productcontrol')}}" id="PCBtn">Product control</a>
    </div>




</body>

</html>