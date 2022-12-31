@extends('layouts.frontend')

@section('content')
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-info mb-3">
                    <div class="card-header"><h2>{{ $event_info->title }}</h2></div>
                    <div class="card-body">
                        <div class="event-single-image">
                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/2.JPG" alt="">
                        </div>
                        <div class="event-single-body">
                            <button type="button" class="btn btn-light mt-3">{{ $event_info->department->name }}</button>

                            <div class="event-description">
                                <p>
                                    {{ $event_info->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-info mb-3">
                    <div class="card-header">Latest Events</div>
                    <div class="card-body">
                        <nav>
                            <ul>
                                @foreach ($events as $event)
                                    <li style="line-height: 40px;"><a href="{{ route('event.single',$event->slug) }}"><i class="fa-solid fa-arrow-right-long"></i> {{ Str::limit($event->title, 35) }}</a></li>
                                @endforeach
                            </ul>
                        </nav>

                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection


