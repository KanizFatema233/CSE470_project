@extends('layouts.app')

@section('content')
<h1 align='center'>Welcome To My Front Page !</h1>
<div class="" align='center'>
    <!-- <img src='\images\Frontpage.jpg' alt="" height="400" width="1000"> -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="\images\Frontpage.jpg" height="400" width="1200" alt="...">
            </div>
            <div class="carousel-item">
              <img src="\images\bg.png" height="400" width="1200" alt="...">
            </div>
            <div class="carousel-item">
              <img src="\images\OIP.jpg" height="400" width="1200" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

@endsection
