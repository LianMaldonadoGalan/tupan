<!DOCTYPE html>
<html lang="es">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>TuPan</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
        <!-- end loader -->

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{ url('/nosotros') }}">Acerca de</a>
                    </li>
                    <li>
                        <a href="{{ url('/recetas') }}">Recetas</a>
                    </li>
                    <li>
                        <a href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li>
                        <a href="{{ url('/contacto') }}">Contacto</a>
                    </li>
                    @if (Route::has('login'))
                    <li class="hidden fixed ">
                        @auth

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-jet-dropdown-link>
                        </form>
                        <!--<form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <a href="{{ route('logout') }}" >Cerrar Sesión</a>
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            </form>-->
                        @endauth
                    </li>
                    @endif
                </ul>

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="full">
                                <a class="logo" href="{{ url('/') }}"><img src="images/logotxtblanco.png" alt="#" width="70" height="70" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="full">
                                <div class="right_header_info">
                                    <ul>
                                        <li class="dinone">Contacto : <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">987-654-3210</a></li>
                                        <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">tupanoficial@gmail.com</a></li>
                                        <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">104 Calle Falsa, México</a></li>

                                        @if (Route::has('login'))
                                        <li class=" button_user hidden fixed ">
                                            @auth
                                            @if ((Auth::user()->usertype)==0)
                                            <a class="nav-link" href="{{ url('/admin') }}">Dashboard</a>
                                            @endif
                                            @else
                                        <li class="button_user hidden fixed "><a class="button active" href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                        <li><a class="button hidden fixed " href="{{ route('register') }}">Registrarse</a></li>
                                        @endif
                                        @endauth
                                        </li>
                                        @endif

                                        <li><img style="margin-right: 15px;" src="images/search_icon.png" alt="#"></li>
                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="images/menu_icon.png" alt="#">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header -->
            @yield('contenido')


            <!-- footer -->
            <fooetr>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" col-md-12">
                                <h2>Solicita<strong class="white"> una llamada</strong></h2>
                                <br>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <form class="main_form">
                                    <div class="row">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form-control" placeholder="Nombre" type="text" name="Name">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form-control" placeholder="Email" type="text" name="Email">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form-control" placeholder="Teléfono" type="text" name="Phone">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <textarea class="textarea" placeholder="Mensaje" type="text" name="Message"></textarea>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button class="send">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img src="images/img.jpg" alt="img" /></figure>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer_logo">
                                    <a href="index.html"><img src="images/logotxtblanco.png" alt="logo" /></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="lik">
                                    <li class="active"> <a href="{{ url('/') }}">Inicio</a></li>
                                    <li> <a href="{{ url('/nosotros') }}">Acerca de</a></li>
                                    <li> <a href="{{ url('/recetas') }}">Recetas</a></li>
                                    <li> <a href="{{ url('/blog') }}">Blog</a></li>
                                    <li> <a href="{{ url('/contacto') }}">Contacto</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="new">
                                    <h3>Noticias</h3>
                                    <form class="newtetter" action="newsletter" method="POST">
                                        @csrf
                                        <input class="tetter" placeholder="Tu email" type="email" name="email" id="email">
                                        <button class="submit">Suscribirse</button>
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                @if (session('info'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <strong>{{session('info')}}</strong>
                                </div>
                                @endif

                            </div>
                            <div class="col"></div>

                        </div>

                    </div>
                    <div class="copyright">
                        <div class="container">
                            <p>© 2021 Todos Los Derechos Reservados.<a href="https://html.design/"> TuPan</a></p>
                        </div>
                    </div>
                </div>
            </fooetr>
            <!-- end footer -->

        </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
        #owl-demo .item {
            margin: 3px;
        }

        #owl-demo .item img {
            display: block;
            width: 100%;
            height: auto;
        }
    </style>


    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        })
    </script>

</body>

</html>