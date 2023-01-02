@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="department-header">Department Of NITER</h3>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="card border-secondary mb-3">
                        <div class="card-header" style="background-color: #bbffd4;">
                            <form action="" class="text-right d-block form-inline">
                                <div class="input-group text-right d-block">
                                    <input style="width:200px;" class="form-control" type="text" placeholder="Department" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <button class="btn btn-outline-secondary" type="button">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-body text-secondary">
                            <div class="container">
                                <div class="row">
                                    @foreach ($departments as $department)
                                        <div class="col-md-4">
                                            <div class="department">
                                                <div class="departmnet-img">
                                                    <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/research/1.JPG" alt="">
                                                </div>
                                                <div class="department-body">
                                                    <h3>{{ $department->name }}</h3>
                                                    <hr>
                                                    <a href="{{ route('department.single',$department->slug) }}" class="btn btn-light">View Departmnet</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12 mt-5 text-right">
                                        {{ $departments->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection









