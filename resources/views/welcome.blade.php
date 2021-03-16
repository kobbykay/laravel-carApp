@extends('layouts.app')

@section('content')


<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img.slider-img" src="https://www.elitetraveler.com/wp-content/uploads/2019/07/Screenshot-2020-05-12-at-15.10.34.png" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img class="img.slider-img" src="https://www.gannett-cdn.com/-mm-/ddfb07d8b139c4c0270836afcc80f0ed4c667b27/c=0-354-2398-1709/local/-/media/2017/07/14/USATODAY/USATODAY/636356178191295262-2017-Ford-Escape.jpg?width=2398&height=1355&fit=crop&format=pjpg&auto=webp" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img class="img.slider-img" src="https://cdn.jdpower.com/JDPA_2020%20Audi%20A3%20Dark%20Gray%20Front%20View.jpg" alt="New York" width="1100" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>


<!-- portfolio -->
<div class="portfolio">
    <h1 class="text-center">Welcome To CarApp</h1>
<div class="container">
 <div class="row">

    <div class="col-lg-4 col-md-4 col-sm-12">
   <img src="https://cdn.luxe.digital/media/2020/12/15110747/fastest-cars-world-2021-luxe-digital%402x.jpg" class="img-fluid">
    </div>


  <div class="col-lg-4 col-md-4 col-sm-12">
   <img src="https://cdn.luxe.digital/media/2020/12/15110747/fastest-cars-world-2021-luxe-digital%402x.jpg" class="img-fluid">
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12">
    <img src="https://cdn.luxe.digital/media/2020/12/15110747/fastest-cars-world-2021-luxe-digital%402x.jpg" class="img-fluid">
   </div>


 </div>
</div>
</div>

<!-- portfolio2 -->
<div class="portfolio">
    <h1 class="text-center">Our Portfolio</h1>
<div class="container">
 <div class="row">

    <div class="col-lg-4 col-md-4 col-sm-12">
   <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/most-reliable-used-cars-1604345031.jpg" class="img-fluid">
</div>

  <div class="col-lg-4 col-md-4 col-sm-12">
   <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/most-reliable-used-cars-1604345031.jpg" class="img-fluid">
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12">
    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/most-reliable-used-cars-1604345031.jpg" class="img-fluid">
   </div>


 </div>
</div>
</div>


@endsection
