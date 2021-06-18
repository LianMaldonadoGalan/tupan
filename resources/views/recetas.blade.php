@extends('layouts.tupanbasico')

@section('contenido')

    
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
                        <img src="{{asset('images/'.$product->imgpath) }}" alt="{{$product->nombre}}" style="width:198px;height:197px;"/>
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

@endsection