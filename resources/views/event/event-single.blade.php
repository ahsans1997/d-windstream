@extends('layouts.frontend')

@section('content')
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
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
                            <button type="button" class="btn btn-light mt-3">{{ date('d-M-Y', strtotime($event_info->datetime)) }}</button>
                            <button type="button" class="btn btn-light mt-3">{{ date('h:i A', strtotime($event_info->datetime)) }}</button>

                            <div class="event-description mt-4">
                                <p>
                                    <h5><u>Description</u></h5>
                                    {{ $event_info->description }}
                                </p>
                            </div>
                            <br>
                            @if (isset($event_info->registration_start))
                                <h4>Registration : {{ date('d-M-Y', strtotime($event_info->registration_start)) }} to {{ date('d-M-Y', strtotime($event_info->registration_end)) }} </h4>
                            @endif
                            @if (isset($event_info->price))
                                <h4>Price : {{ $event_info->price }}</h4>
                            @endif
                            @if (isset($event_info->venue))
                                <h4>Venue : {{ $event_info->venue }}</h4>
                            @endif
                            @if (isset($event_info->maximum_sit))
                                <h4>Maximum Sit : {{ $event_info->maximum_sit }}</h4>
                            @endif
                            @if (isset($event_info->organization))
                                <h4>Organization : {{ $event_info->organization }}</h4>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
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


