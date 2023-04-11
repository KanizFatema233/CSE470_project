@extends('layouts.app')

@section('content')
<h1 align='center'>
  <form class="" action="{{ route('attendance_take') }}" method="POST">
    @csrf
    <input type="label" name="date" value="{{date("Y/m/d")}}"><br><br>
    <input type="label" name="time" value="{{date("h:i:sa")}}"><br><br>
    <input type="label" name="name" value="{{ Auth::user()->name }}"><br><br>
    <input type="submit" value="Check In">
  </form>

</h1>
@endsection
