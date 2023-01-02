@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="event-p-header">Researchs Of NITER</h3>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="card border-secondary mb-3">
                        <div class="card-header" style="background-color: #bbffd4;">
                            <form action="" class="text-right d-block form-inline">
                                <div class="input-group text-right d-block">
                                    <input style="width:200px;" class="form-control" type="text" placeholder="Research" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <button class="btn btn-outline-secondary" type="button">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-body text-secondary">
                            <div class="container">
                                <div class="row">
                                    @foreach ($researches as $research)
                                        <div class="col-md-4">
                                            <div class="research-p">
                                                <div class="research-p-img">
                                                    <img class="img-fluid" src="{{ asset('/') }}assets/images/research/{{ $research->image }}">
                                                </div>
                                                <div class="research-p-body">
                                                    <h3>{{ Str::words($research->title, 6) }}</h3>
                                                    <hr>
                                                    <a href="{{ route('research.single',$research->slug) }}" class="btn btn-light">View Research</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection








