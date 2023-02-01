@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  mb-3">
                        {{-- <div class="card-header" style="background-color: #bbffd4;">
                            <form action="" class="text-right d-block form-inline">
                                <div class="input-group text-right d-block">
                                    <input style="width:200px;" class="form-control" type="text" placeholder="Department"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <button class="btn btn-outline-secondary" type="button">Search</button>
                                </div>
                            </form>
                        </div> --}}
                        <div class="card-body text-secondary">
                            <div class="container">
                                <div class="row">
                                    @forelse($departments as $department)
                                        <div class="col-md-4 departmennt-card">
                                            <div class="department">
                                                <div class="departmnet-img">
                                                    @if ($department->image)
                                                        <img class="img-fluid"
                                                            src="{{ $department->getFirstMediaUrl('department') }}"
                                                            alt="">
                                                    @else
                                                        <img src="//via.placeholder.com/350x150" class="lazyloaded"
                                                            data-ll-status="loaded">
                                                    @endif
                                                </div>
                                                <div class="department-body">
                                                    <h3><a href="{{ url('/department', $department->slug) }}"
                                                        class="text-dark text-left">{{ Str::limit($department->name,40) }}</a></h3>
                                                </div>
                                                <div class="department-footer p-3">
                                                    <hr>
                                                    <a href="{{ url('/department', $department->slug) }}"
                                                        class="btn button-color">View Departmnet <i class="fa fa-check-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        <div class="col-md-12">
                                            <h3 class="text-center">No Department Found</h3>
                                        </div>
                                    @endforelse

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
