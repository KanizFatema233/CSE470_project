@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                    <div class="container overflow-hidden">
                        <div class="row gy-5">
                            <div class="col-6">
                                <div class="p-3 border bg-light">
                                   <a href="attendance">
                                      Attendance
                                   </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 border bg-light">
                                    <a href="inventory">
                                       Inventory
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 border bg-light"><a href="food_management">
                                  food_management
                                </a>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 border bg-light">Custom column padding</div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 border bg-light">Custom column padding</div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
