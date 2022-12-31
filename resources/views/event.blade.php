@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="event-p-header">Events Of NITER</h3>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="card border-secondary mb-3">
                        <div class="card-header" style="background-color: #bbffd4;">
                            <form action="" class="text-right d-block form-inline">
                                <div class="input-group text-right d-block">
                                    <input style="width:200px;" class="form-control" type="text" placeholder="Event" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <button class="btn btn-outline-secondary" type="button">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-body text-secondary">
                            <div class="container">
                                <div class="row">
                                    @foreach ($events as $event)
                                    <div class="col-md-4">
                                        <div class="event-p">
                                            <div class="event-p-img">
                                                <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/Events/1.jpg" alt="">
                                            </div>
                                            <div class="event-p-body">
                                                <h3>{{ Str::words($event->title, 7) }}</h3>
                                                <hr>
                                                <a href="{{ route('event.single',$event->slug) }}" class="btn btn-light">View event</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-md-12 mt-5 text-right">
                                        {{ $events->links() }}
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









