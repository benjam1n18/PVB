<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Page title -->
    <title>Alphabet - Children One Page HTML5</title>
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script>
    <![endif]-->
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Icon fonts -->
    <link href="fonts/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,800%7CAlegreya+Sans:700,900' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Color Style CSS -->
    <link href="styles/Childhood.css" rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- LayerSlider stylesheet -->
    <link rel="stylesheet" href="layerslider/css/layerslider.css">
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<!-- Page width 'Boxed' of 'Full' -->
<body id="page-top" class="full" data-bs-spy="scroll" data-bs-target=".navbar-nav" >
<!-- Preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-xl fixed-top">
    <div class="container">
        <!-- Logo mobile-->
        <a class="navbar-brand-small page-scroll my-auto d-xl-none" href="/">
            <img src="img/logo.png"  alt="">
        </a>
        <div class="justify-content-lg-end">
            <!-- hamburger menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-alphabet" aria-controls="nav-alphabet" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-alphabet">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item home">
                    <a class="nav-link" href="/#page-top">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#team">Team</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-dropdown active" href="#" id="sub-menu2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Weken
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="sub-menu2">
                        <li><a class="dropdown-item" href="week1">Week 1!</a></li>
                        <li><a class="dropdown-item" href="week2">Week 2</a></li>
                        <li><a class="dropdown-item" href="index-video">Week 3</a></li>
                        <li><a class="dropdown-item active" href="elements-page">Week 4</a></li>
                    </ul>
                </li>
                <!--desktop logo -->
                <li class="nav-item d-none d-xl-block navbar-brand-centered ">
                    <a href="/#page-top">
                        <img src="img/logo.png"  alt="">
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/dashboard"  aria-expanded="false">
                                   Profiel
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                                >Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
                <!--/nav-item -->
            </ul>
            <!--/navbar-nav -->
        </div>
        <!--/collapse -->
    </div>
    <!--/container -->
</nav>
<!--/navbar ends-->
