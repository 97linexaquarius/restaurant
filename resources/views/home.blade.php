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
      <img src="http://shaitien.com/upload/hinhanh/1520264435_Bien%20dai%20nho.jpg" alt="...">
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
@endsection