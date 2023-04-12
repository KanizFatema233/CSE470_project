@extends('layouts.app')

@section('content')
<h1 align='center'>
  <form class="" action="{{ route('food_list') }}" method="POST">
    @csrf
    <input type="label" name="name" value="{{ Auth::user()->name }}" readonly><br><br>
    <input type="number" name="employee_id"><br><br>

    <label>Choose a menu:</label>
 <select name="menu" id="cars">
   <option value="menu1">set menu1</option>
   <option value="menu2">set menu2</option>
   <option value="menu3">set menu3</option>
   <option value="menu4">set menu4</option>
 </select><br><br>
    <!-- <input type="label" name="time" value="{{date("h:i:sa")}}"><br><br> -->

    <input type="submit" value="reserve_lunch">
  </form>

</h1>

@endsection
