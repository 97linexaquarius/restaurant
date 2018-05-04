@extends('master')
@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://shaitien.com/upload/hinhanh/1516096169_shrimpArtboard%201.jpg" alt="...">
      <div class="carousel-caption">
        <h1>100% fresh Seafood </h1>
      </div>
    </div>
    <div class="item">
      <img src="http://shaitien.com/upload/hinhanh/1525356367_bien hai tien.jpg" alt="...">
      <div class="carousel-caption">
        <h1>100% fresh Seafood </h1>
      </div>
    </div>
    <div class="item">
      <img src="http://shaitien.com/upload/hinhanh/1520264123_sua%203.jpg" alt="...">
      <div class="carousel-caption">
        <h1>100% fresh Seafood </h1>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div style="margin: 50px 0px"></div>
<div class="banner">
    <img src="{{asset('images/banner-22.jpg')}}" alt="" class="img-responsive">
</div>
<div style="margin: 50px 0px"></div>
<div class="customer">
<h3 class="text-center" style="padding-top:30px">Customer Reviews</h3>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{asset('images/chituyet.jpg')}}" alt="..." class="img-circle">
      <div class="caption text-center">
        <h3>Chị Tuyết</h3>
        <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iure, ex adipisci voluptatem qui quis tempora quod repellat asperiores beatae.</i>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{asset('images/chilan.jpg')}}" alt="..." class="img-circle">
      <div class="caption text-center">
        <h3>Chị Lan</h3>
        <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iure, ex adipisci voluptatem qui quis tempora quod repellat asperiores beatae.</i>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{asset('images/anhhung.jpg')}}" alt="..." class="img-circle">
      <div class="caption text-center">
        <h3>Anh Hùng</h3>
        <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iure, ex adipisci voluptatem qui quis tempora quod repellat asperiores beatae.</i>
      </div>
    </div>
  </div>
</div>
</div>
@endsection