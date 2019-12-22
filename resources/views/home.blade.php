@extends('stru')
@section('style')
<style type="text/css">
      


      
    </style>

@endsection
@section('navbar')
@include('navbar')
@endsection
@section('main')

<img src="/images/home1.png" class="img-fluid" alt="Responsive image">
<h2>LATEST FLIGHT DETAIL</h2>

  <div class="container">
    <img src="/images/milan1.jpg" class="img-fluid" alt="Responsive image" width="500px">
<img src="/images/dubai1.jpg" class="img-fluid" alt="Responsive image" width="500px">
<center>
<h3 >A round trip from milan to pakistan is starting from pkr 67370.</h3>
<h3>A round trip from dubai to peshawar is starting from pkr 32,400</h3>
</center>
  </div>
  <div class="container">
<img src="/images/tokyo1.jpg" class="img-fluid" alt="Responsive image" width="500px">
<img src="/images/karachi1.jpg" class="img-fluid" alt="Responsive image" width="500px">
<center>

<h3>A round trip from kuala Lumpur to Islamabad is starting from pkr 67370.</h3>
<h3>A round trip from Tokyo to Karachi is starting from pkr 32,400</h3>
</center>
</div>






@endsection