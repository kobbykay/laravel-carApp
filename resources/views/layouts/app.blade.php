<?php
use App\Http\Controllers\ProductController;
$total=0;

if(Session::has('user'))
{
  $total= ProductController::cartItem();
}



?>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>



<body>

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('prods') }}">ShowRoom</a>
                        </li>

                        @if(Session::has('user'))
                        <li class="nav-item">
                            <a class="nav-link" href="/myorders">Orders</a>
                        </li>

                        @endif

                        @if(Session::has('is_admin'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.home') }}">Admin Dashboard</a>
                        </li>

                        @endif










                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        @if(Session::has('user'))
                                <li class="nav-item">
                                    <a class="nav-link" href="/cartlist">cart({{$total}})</a>
                                </li>
                                @endif

                                <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<style >

    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    img.slider-img {
        height: 400px !important
    }

    .custom-product {
        height: 800px

    }

    .slider-text {
        background-color: #35443585 !important;
    }

    .trending-image {
        height: 100px;
        width: 200px;
    }

    .trening-item {
        float: left;
        width: 20%;
        margin:10px;
    }
    .trening-item-ad {
        float: left;
        width: 40%;
        margin:10px;
    }
    .trending-wrapper  {
        margin: 30px;
    }

    .searched-item{
        padding: 30px
    }

    .detail-img {
        height: 200px;
        width:300px:
    }

    .search-box {
        width: 500px !important
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    .btn{
        width:150px;
    }
/*Portfolio*/
.portfolio{
 margin: 4em 0;
    position: relative;
}
.portfolio h1{
 color:#F97300;
 margin: 2em;
}
.portfolio img{
  height: 15rem;
  width: 100%;
  margin: 1em;

}

.carousel-inner img {
    width: 100%;
  }

  .container-admin{

    border: 5px;
    display: flex;
    justify-content: center;
  }

    </style>

    <script>

$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 2000 ); // 2 secs

});

    </script>


</html>
