@extends('layouts.tupanbasico')

@section('contenido')

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
          <i><img src="images/title.png" alt="#"/></i>
          <br><br>
          <span>El mejor pan que tu paladar puede degustar</span>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="{{asset('images/'.$producto[0]->imgpath) }}" alt="{{$producto[0]->nombre}}" style="width:370px;height:340px;"/>
             <span>{{substr($producto[0]->updated_at, 0,-8)}}</span>
            </figure>
          </div>
          <h3>{{$producto[0]->nombre}}</h3>
          <p>{{$producto[0]->desc}}</p>
        </div>
      </div>
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
          <figure><img src="{{asset('images/'.$producto[1]->imgpath) }}" alt="{{$producto[1]->nombre}}" style="width:370px;height:340px;"/>
             <span>{{substr($producto[1]->updated_at, 0,-8)}}</span>
            </figure>
          </div>
          <h3>{{$producto[1]->nombre}}</h3>
          <p>{{$producto[1]->desc}}</p>
        </div>
      </div>
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="blog_box">
          <div class="blog_img_box">
          <figure><img src="{{asset('images/'.$producto[2]->imgpath) }}" alt="{{$producto[2]->nombre}}" style="width:370px;height:340px;"/>
             <span>{{substr($producto[2]->updated_at, 0,-8)}}</span>
            </figure>
          </div>
          <h3>{{$producto[2]->nombre}}</h3>
          <p>{{$producto[2]->desc}}</p>
        </div>
      </div>
    </div>
    
  </div>
</div>
<!-- end blog -->

@endsection