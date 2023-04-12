@extends('layouts.app')

@section('content')
<h1 align='center'>
  <form class="" action="{{ route('attendance_take') }}" method="POST">
    @csrf
    <input type="label" name="date" value="{{date("d/m/Y", time() + 6 * 60 * 60)}}" readonly><br><br>
    <input type="label" name="time" value="{{date("h:i:s a", time() + 6 * 60 * 60)}}"readonly><br><br>
    <input type="label" name="name" value="{{ Auth::user()->name }}"readonly><br><br>
    <input type="submit" value="Check In">
  </form>

</h1>
@endsection
