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
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ $event_info->getFirstMediaUrl('event') }}" alt="" style="height: 450px">
                                  </div>
                                    @foreach ($event_info->getMedia('events') as $img)
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ $img->getUrl() }}" alt="" style="height: 450px">
                                  </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
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


