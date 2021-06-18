@extends('layouts.tupanbasico')

@section('contenido')

    
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
                <i><img src="images/title.png" alt="#"/></i>
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
                 conforme con su compra, entonces le regresamos su dinero.    No pierda el tiempo y llámenos para que realice su pedido! Intentaremos llamarle lo antes posible!</p>
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

@endsection