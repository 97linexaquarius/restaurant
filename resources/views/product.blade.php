@extends('master')
@section('content')

    <div id="gallery" style="display:none;">
   
    @foreach($food->image as $image)
    <!-- alt va description dung de lam name va title cho mon an -->
        <img alt="" src="{{route('home')}}/images/uploads/{{$image->name}}" data-image="{{route('home')}}/images/uploads/{{$image->name}}"
            data-description="" class="img-responsive">
    @endforeach
   
    </div>
    <ul class="nav nav-tabs" style="margin-top: 10px;">
        <li class="active">
            <a data-toggle="tab" href="#intro">Intro</a>
        </li>
        <li>
            <a data-toggle="tab" href="#cmt">Comment</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="intro" class="tab-pane fade in active">
        
            <h3 style="text-transform: uppercase;">{{$food->name}}</h3> 
            <p class="price">Giá: <span>{{$food->price}}</span> VNĐ/1 phần</p>
            <p>{{$food->desc}}</p>
       
       
        </div>
        
        <div id="cmt" class="tab-pane fade">
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
        </div>
    </div>
    <div class="relate">
        <h3>Sản phẩm liên quan</h3>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="http://lorempixel.com/output/food-q-c-640-480-7.jpg" alt="" class="img-responsive">
                <div class="info">
                <h3 class="name">  <a href="">Bread</a> </h3>
                <p class="price">12000 VND</p>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <img src="http://lorempixel.com/output/food-q-c-640-480-7.jpg" alt="" class="img-responsive">
                <div class="info">
                <h3 class="name">  <a href="">Bread</a> </h3>
                <p class="price">12000 VND</p>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <img src="http://lorempixel.com/output/food-q-c-640-480-7.jpg" alt="" class="img-responsive">
                <div class="info">
                <h3 class="name">  <a href="">Bread</a> </h3>
                <p class="price">12000 VND</p>
                </div>
            </div>

        </div>
    </div>
      
@endsection