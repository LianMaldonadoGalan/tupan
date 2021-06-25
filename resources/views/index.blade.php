@extends('layouts.tupanbasico')

@section('contenido')

<!-- Aqui empieza el contenido-->
<!-- start slider section -->
<div class="slider_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="slider_cont">
                                            <h3>Descubre nuestra panaderia<br>Cerca de tí</h3>
                                            <p>Busca nuestra sucursal más cercana para que puedas disfrutar de nuestro delicioso pan.</p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="slider_image full text_align_center">
                                            <img class="img-responsive" src="images/pan_slide2.jpg" alt="#" style="width:900px"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="slider_cont">
                                            <h3>Discubre nuestro pan<br>Que se encuentra cerca de tí</h3>
                                            <p>Toda la variedad de nuestro pan está disponible cerca de tí para que puedas disfrutarlo en cualquier momento.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 full text_align_center">
                                        <div class="slider_image">
                                            <img class="img-responsive" src="images/pan_slide.png" alt="#" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                            <i class="fa fa-angle-up"></i>
                        </a>
                        
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                            <i class="fa fa-angle-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end slider section -->


<!-- section -->
<div class="yellow_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Nuestros Productos</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- section -->
<section class="resip_section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="owl-carousel owl-theme">

                    @foreach ($producto as $product)
                    <div class="item">
                        <div class="product_blog_img">
                            <img src="{{asset('images/'.$product->imgpath) }}" alt="{{$product->nombre}}" style="width:198px;height:197px;" />
                        </div>
                        <div class="product_blog_cont">
                            <h3>{{$product->nombre}}</h3>
                            <h4><span class="theme_color">$</span>{{$product->precio}}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bg_bg">
    <!-- about -->

    <div class="yellow_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Acerca de nosotros</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="images/title.png" alt="#" /></i>
                        <br><br>
                        <span> Somos una panaderia fundada en 1989 y desde entonces nos hemos comprometido a brindar
                            <br> a nuestros clientes un pan de calidad y sabor inigualable por el mejor precio.
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about_box">
                        <h3>El Mejor Pan</h3>
                        <p> Estamos seguros de que el pan de nuestro negocio saciará por completo su hambre, además de ser bastante nutritivo y delicioso, le prometemos que
                            no quedará instisfecho y lo mejor de todo es que tendrá una variedad muy grande para elegir el que más le guste todo por el precio justo, si no queda
                            conforme con su compra, entonces le regresamos su dinero. No pierda el tiempo y llámenos para que realice su pedido! Intentaremos llamarle lo antes posible!</p>
                        <a href="{{ url('/blog') }}">Quiero conocer más <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                    <div class="about_img">
                        <figure><img src="images/about-img.jpg" alt="aboutUs"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <div class="yellow_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Nuestro blog</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="images/title.png" alt="#" /></i>
                        <br><br>
                        <span>El mejor pan que tu paladar puede degustar</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                    <div class="blog_box">
                        <div class="blog_img_box">
                            <figure><img src="{{asset('images/'.$productorandom[0]->imgpath) }}" alt="{{$productorandom[0]->nombre}}" style="width:370px;height:340px;" />
                                <span>{{substr($productorandom[0]->updated_at, 0,-8)}}</span>
                            </figure>
                        </div>
                        <h3>{{$productorandom[0]->nombre}}</h3>
                        <p>{{$productorandom[0]->desc}}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                    <div class="blog_box">
                        <div class="blog_img_box">
                            <figure><img src="{{asset('images/'.$productorandom[1]->imgpath) }}" alt="{{$productorandom[1]->nombre}}" style="width:370px;height:340px;" />
                                <span>{{substr($productorandom[1]->updated_at, 0,-8)}}</span>
                            </figure>
                        </div>
                        <h3>{{$productorandom[1]->nombre}}</h3>
                        <p>{{$productorandom[1]->desc}}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="blog_box">
                        <div class="blog_img_box">
                            <figure><img src="{{asset('images/'.$productorandom[2]->imgpath) }}" alt="{{$productorandom[2]->nombre}}" style="width:370px;height:340px;" />
                                <span>{{substr($productorandom[2]->updated_at, 0,-8)}}</span>
                            </figure>
                        </div>
                        <h3>{{$productorandom[2]->nombre}}</h3>
                        <p>{{$productorandom[2]->desc}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end blog -->

    <!-- Our Client -->
    <div class="Client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="images/title.png" alt="#" /></i>
                        <h2>Nuestros Clientes Hablan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="Client_box">
                        <img src="images/client.jpg" alt="client" style="width:270px;height:230px;"/>
                        <h3>Delicioso!</h3>
                        <p>El pan de TuPan es de los más deliciosos y nutritivos que hemos probado, siendo pan completamente artesanal y natural, al mejor precio posible, simplemente nos quedamos cada vez con ganas de más.</p>
                        <i><img src="images/client_icon.png" alt="#" /></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Our Client -->
</div>

@endsection