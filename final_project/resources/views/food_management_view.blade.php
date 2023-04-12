@extends('layouts.app')

@section('content')
<h1 align='center'>Food List !</h1>
<div align='center'>
  <table class="table table-bordered" border = 1 style="width:50%">
     <tr>
        <td>Name</td>
        <td>Employee ID</td>
        <td>Menu</td>
     </tr>
     <?php $count = 0; ?>
     @foreach ($data as $dat)
         <?php $count = $count + 1; ?>
         @if($count==count($data))
             <tr>
                <td>{{ $dat->name }}</td>
                <td>{{ $dat->employee_id }}</td>
                <td>{{ $dat->menu }}</td>
             </tr>
         @endif

     @endforeach
  </table>
</div>

<section>
  <div class="container my-5 py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
              <div class="w-100">
                <h5>Review The Food !</h5>
                <div class="form-outline">
                  <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                </div>
                <div class="d-flex justify-content-between mt-3">
                  <button type="button" class="btn btn-danger">
                    Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
