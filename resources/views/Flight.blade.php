@extends('stru')

@section('navbar')
@include('navbar')
@endsection
@section('main')
<br>

  
    <form action="store" method="post">
    <label for="exampleInputEmail1"><strong>Select Your Destination:</strong><br>
     
    </label><br>
    <label>Enter email:</label>
    <input type="email" name="email" class="form-control">
    <label> From Airport&City</label>:

       <select class="form-control" name="fromcity">
      <option> pakistan</option>
      <option>india</option>
      <option>Japan</option>
         <option>Tokyo</option>
            <option>Italy</option>
    </select>
    <label>To Airport and city</label>:
    <select class="form-control" name="tocity">
      <option>
        pakistan
      </option>
      <option>india</option>
      <option>London</option>
      <option>Japan</option>
         <option>Tokyo</option>
            <option>Italy</option>
    </select>

    
    <br>   
 
  <input type="submit" class="btn btn-primary"></input><br><br>
  <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
@endsection
