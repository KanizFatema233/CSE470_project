@extends('layouts.app')

@section('content')
<h1 align='center'>Welcome To My Attendance Database !</h1>
<div align='center'>
  <table class="table table-bordered" border = 1 style="width:50%">
     <tr>
        <td>Name</td>
        <td>Date</td>
        <td>Time</td>
     </tr>
     <?php $count = 0; ?>
     @foreach ($data as $dat)
     <?php $first_date = $dat->date; ?>
         @if($first_date == $dat->date)
            <?php $count = $count + 1; ?>
         @else
             <?php
             $first_date = $dat->date;
             $count = 0;
              ?>
         @endif
         @if($count == 1 || $count==count($data))
             <tr>
                <td>{{ $dat->name }}</td>
                <td>{{ $dat->date }}</td>
                <td>{{ $dat->time }}</td>
             </tr>
         @endif

     @endforeach
  </table>
</div>

@endsection
