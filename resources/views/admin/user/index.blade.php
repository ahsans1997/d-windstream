@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left">Profile Details</h5>
                        <h5 class="text-right"><a href="{{ route('user.edit',$user->id) }}" class="btn btn-info">Edit</a></h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('/') }}assets/images/user/{{ $user->profile_photo_path }}" class="form-control" alt="">
                            </div>
                            <div class="col-9">
                                <h4>Full Name : {{ $user->name }}</h4>
                                <h5>Email : {{ $user->email }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection
