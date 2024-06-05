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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 d-none d-md-block col-6 bg-white p-0 left-nav">
                <div class="w-100 vh-100 px-3 shadow-sm">
                    <div class="logo d-flex justify-content-between align-items-center py-3 text-uppercase" style="font-weight: 900; font-size: 16px;">
                        <span style="line-height: 16px; transform: scaleY(1.4);">Global Express <br> Lotto</span>
                        <span class="close-menu-btn d-block d-md-none"> <i style="font-size: 29px;" class="fa fa-arrow-left"></i> </span>
                    </div>
                    <a href="{{url('user/dashboard')}}" class="mt-5 mb-2 nav-link text-decoration-none">
                        <div class="p-2 d-flex align-items-center">
                            <div class="icon d-flex justify-content-center">
                                <i style="font-size: 24px;" class="fa fa-dashboard"></i>
                            </div>
                            <div class="text col-10" style="font-size: 16px; font-weight: 500;">Dashboard</div>
                        </div>
                    </a>
                    <a href="{{url('user/place-bet')}}" class="my-2 nav-link text-decoration-none">
                        <div class="p-2 d-flex align-items-center">
                            <div class="icon d-flex justify-content-center">
                                <i style="font-size: 24px;" class="fa fa-gamepad"></i>
                            </div>
                            <div class="text col-10" style="font-size: 16px; font-weight: 500;">Place Bet</div>
                        </div>
                    </a>
                    <a href="{{url('user/my-bets')}}" class="my-2 nav-link text-decoration-none">
                        <div class="p-2 d-flex align-items-center">
                            <div class="icon d-flex justify-content-center">
                                <i style="font-size: 24px;" class="fa fa-exchange"></i>
                            </div>
                            <div class="text col-10" style="font-size: 16px; font-weight: 500;">My Bets</div>
                        </div>
                    </a>
                    <a href="{{url('user/profile')}}" class="my-2 nav-link text-decoration-none">
                        <div class="p-2 d-flex align-items-center">
                            <div class="icon d-flex justify-content-center">
                                <i style="font-size: 24px;" class="fa fa-user-o"></i>
                            </div>
                            <div class="text col-10" style="font-size: 16px; font-weight: 500;">Profile</div>
                        </div>
                    </a>
                    <a href="{{url('user/withdraw')}}" class="my-2 nav-link text-decoration-none">
                        <div class="p-2 d-flex align-items-center">
                            <div class="icon d-flex justify-content-center">
                                <i style="font-size: 24px;" class="fa fa-arrow-down"></i>
                            </div>
                            <div class="text col-10" style="font-size: 16px; font-weight: 500;">Withdraw</div>
                        </div>
                    </a>
                    <a href="{{url('user/my-withdraw')}}" class="my-2 nav-link text-decoration-none">
                        <div class="p-2 d-flex align-items-center">
                            <div class="icon d-flex justify-content-center">
                                <i style="font-size: 24px;" class="fa fa-money"></i>
                            </div>
                            <div class="text col-10" style="font-size: 16px; font-weight: 500;">My Withdraws</div>
                        </div>
                    </a>
                    <a href="{{url('user/logout-out')}}" class="my-2 nav-link text-decoration-none">
                        <div class="p-2 d-flex align-items-center">
                            <div class="icon d-flex justify-content-center">
                                <i style="font-size: 24px;" class="fa fa-power-off"></i>
                            </div>
                            <div class="text col-10" style="font-size: 16px; font-weight: 500;">Logout</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-9 p-0" style="font-size: 16px;">
                <div class="w-100 shadow-sm py-3 px-3 d-flex justify-content-between align-items-center">
                    <div class="home">
                        <span class="d-none d-md-block" onclick="window.location.href = 'user/dashboard'"> <i class="fa fa-home"></i> Home</span>
                        <span class="menu-btn d-block d-md-none"> <i style="font-size: 29px;" class="fa fa-bars"></i></span>
                    </div>
                    <div class="menu-icons d-flex" style="font-size: 24px;">
                        <div class="px-3">
                            <i style="cursor: pointer;" class="fa fa-bell-o"></i>
                        </div>
                        <div class="dropdown">
                            <div style="cursor: pointer;" class="px-3 d-flex align-items-center dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle-o" style="font-size: 40px;"></i> &nbsp;
                                <div style="font-size: 16px; font-weight: 600;"> {{$user->first_name}} </div>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{url('user/profile')}}">Profile</a>
                              <a class="dropdown-item" href="{{url('user/withdraw')}}">Withdraw</a>
                              <a class="dropdown-item" href="{{url('user/place-bet')}}">Place Bet</a>
                              <a class="dropdown-item" href="{{url('user/logout')}}">Logout</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="p-5 w-100 bg-light h-100">
                    @yield('content')
                </div>
            </div>
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