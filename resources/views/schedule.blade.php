@extends('stru')

@section('navbar')
@include('navbar')
@endsection
@section('main')
<br>
<div class="container">
  @foreach($user as $row)
  <div class="form-group">
    
     <strong> Flight date</strong>:
    </label><br>
   <input type="text" class="form-control" name="" value="{{$row->flighttiming}}">
    
    <strong>Airport arrival timings</strong>:
   <input type="text" class="form-control" name="" value="{{$row->flightarivaltime}}">
  </div>
  @endforeach
  
  


</div>
@endsection
