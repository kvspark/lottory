<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>User Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- site favicon -->
     <link rel="shortcut icon" type="image/png" href="User/assets/images/head.png">
    <link rel="shortcut icon" type="image/png" href="User/assets/images/head.png">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{url('assets/css/fontawesome.min.css')}}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- animate css link --><meta name="keywords" content="Online Lottery,Live Lotter,Poolmond,Mega Pool Lotto Lottery,USA and UK National Lottery,Official USA and UK National Lottery Website,UK National Lottery Website,2021 USA Lottery">
    <link href="../../cdn.jsdelivr.net/npm/bootstrap%405.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="../../cdn.jsdelivr.net/npm/bootstrap%405.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }
        .nav-link:hover{
            background-color: lightgray;
        }
        @media (max-width: 920px){
            .left-nav.active{
                display: block !important;
                position: absolute;
                z-index: 1000;
            }
        }
    </style>
  </head>
<body>
    <div class="w-100 d-flex vh-100 m-0 alert-primary justify-content-center align-items-center">
        <div style="width: 90%; max-width: 500px;" class="p-3 bg-white shadow">
            <h3>Admin Login</h3>
            @if(Session::has('fail'))
                <div class="alert alert-danger"> {{Session::get('fail')}} </div>
            @endif
            <form action="{{url('admin/login')}}" method="post">
                @csrf
                <label class="mb-0">Username</label>
                <input type="text" class="form-control mb-3" name="username" style="height: 50px;">
                <label class="mb-0">Password</label>
                <input type="password" class="form-control mb-3" name="password" style="height: 50px;">
                <button class="btn btn-primary mt-1">Login</button>
            </form>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('.menu-btn').click(function(){
                $('.left-nav').addClass('active')
            })
            $('.close-menu-btn').click(function(){
                $('.left-nav').removeClass('active')
            })
            $('#withdrawAmt').on('input',function(){
                var amount = $('#withdrawAmt').val();
                var btcprice = $('#btcCurrentPrice').val()
                var result = parseInt(amount) / parseInt(btcprice);
                $('#btc_worth').val(result.toFixed(6));
                // alert(btcprice)

            })
        })
    </script>
</body>
</html>