@extends('stru')

@section('navbar')
@include('navbar')
@endsection
@section('main')

  <div class="form-group">
    <label >Status</label>
  </div>
  <div class="form-group">
    @foreach($data as $row)
   
     <strong> From Airport&City</strong>:
    
    <input type="text" name="" class="form-control" value="{{$row->fromcity}}">
      
    <strong>To Airport and city</strong>:
    <input type="text" name="" class="form-control" value="{{$row->tocity}}">
    @endforeach
    @foreach($user as $row)
    <label>Flight Number</label>

    <input type="text" name="" class="form-control" value="{{$row->flightnumber}}">
    <label>Ticket Number</label>

    <input type="text" name="" class="form-control" value="{{$row->Ticketnumber}}"><br>
    @endforeach
 </div>
  
     
     </form>
@endsection
