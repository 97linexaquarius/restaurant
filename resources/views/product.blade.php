@extends('master')
@section('content')
<div class="col-xs-12 col-md-9">
    <div id="gallery" style="display:none;">

        <img alt="Preview Image 1" src="https://picsum.photos/800/400/?image=0" data-image="https://picsum.photos/800/400/?image=0"
            data-description="Preview Image 1 Description" class="responsive-img">

        <img alt="Preview Image 2" src="https://picsum.photos/800/400/?image=521" data-image="https://picsum.photos/800/400/?image=521"
            data-description="Preview Image 2 Description" class="responsive-img">

        <img alt="Preview Image 2" src="https://picsum.photos/800/400/?image=241" data-image="https://picsum.photos/800/400/?image=241"
            data-description="Preview Image 2 Description" class="responsive-img">

        <img alt="Preview Image 2" src="https://picsum.photos/800/400/?image=852" data-image="https://picsum.photos/800/400/?image=852"
            data-description="Preview Image 2 Description" class="responsive-img">

        <img alt="Preview Image 2" src="https://picsum.photos/800/400/?image=465" data-image="https://picsum.photos/800/400/?image=465"
            data-description="Preview Image 2 Description" class="responsive-img">

        <img alt="Preview Image 2" src="https://picsum.photos/800/400/?image=555" data-image="https://picsum.photos/800/400/?image=555"
            data-description="Preview Image 2 Description" class="responsive-img">

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
            <h3>CHÁO HÀU</h3>
            <p class="price">Giá: <span></span> VNĐ/1 phần</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</p>
                
            
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
</div>       
@endsection