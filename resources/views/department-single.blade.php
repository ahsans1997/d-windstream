@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news-single-image">
                        <img class="img-fluid" src="asset/img/news/2.JPG" alt="">
                    </div>
                    <div class="news-single-body">
                        <h2>{{ $department->name }}</h2>

                        <div class="news-description">
                            {!! $department->description !!}
                        </div>
                    </div>
                    <!-- department news -->
                    <div class="container departmnet-news">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card border-secondary mb-3">
                                    <div class="card-header" style="background-color: #bbffd4;"><b>Latest News</b></div>
                                    <div class="card-body text-secondary">
                                        <div class="container">
                                            <div class="row">

                                                @forelse($department_news as $news)

                                                <ul class="d-block">
                                                    <li class="flex justify-around">
                                                        <a class="text-dark" href="{{ url('/news', $news->slug) }}"><i class="fa fa-link"></i> {{ Str::limit($news->title, 20) }}</a>  <span>{{$news->created_at->format('d-M-Y')}}</span>
                                                    </li>
                                                </ul>
                                                    {{-- {{ dd($news) }} --}}
                                                    <div class="col-md-6 d-none">
                                                        <div class="news">
                                                            {{-- <div class="news-img">
                                                                @if ($news->image)
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('assets/images/news') . '/' . $news->image }}"
                                                                        alt="">
                                                                @else
                                                                    <img src="//via.placeholder.com/350x150"
                                                                        class="lazyloaded" data-ll-status="loaded">
                                                                @endif
                                                            </div> --}}
                                                            <div class="news-body">
                                                                <h3>{{ Str::limit($news->title, 20) }}</h3>
                                                                <hr>
                                                                <a href="{{ url('/news', $news->slug) }}"
                                                                    class="btn btn-light">Read More..
                                                                    </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="col-md-12">
                                                        <div class="alert alert-danger">
                                                            <h3>No News Found</h3>
                                                        </div>
                                                    </div>
                                                @endforelse


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card border-secondary mb-3">
                                    <div class="card-header" style="background-color: #bbffd4;"><b>Latest Events</b></div>
                                    <div class="card-body text-secondary">
                                        <div class="container">
                                            <div class="row">
                                                @forelse($department_events as $event)

                                                <ul class="d-block">
                                                    <li class="flex justify-around">
                                                        <a class="text-dark" href="{{ url('/event', $news->slug) }}"><i class="fa fa-link"></i> {{ Str::limit($event->title, 20) }}</a>  <span>{{$event->created_at->format('d-M-Y')}}</span>
                                                    </li>
                                                </ul>
                                                @empty
                                                    <div class="col-md-12">
                                                        <div class="alert alert-danger">
                                                            <h3>No Event Found</h3>
                                                        </div>
                                                    </div>
                                                @endforelse


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- department event 
                    <div class="container department-event">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card border-secondary mb-3">
                                    <div class="card-header" style="background-color: #bbffd4;"><b>Events</b></div>
                                    <div class="card-body text-secondary">
                                        <div class="container">
                                            <div class="row">

                                                @forelse($department_events as $event)

                                                
                                                <div class="col-md-3">
                                                    <div class="event-p">
                                                        <div class="event-p-img">
                                                            @if ($event->image)
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('assets/images/events') . '/' . $event->image }}"
                                                                        alt="">
                                                                @else
                                                                    <img src="//via.placeholder.com/350x150"
                                                                        class="lazyloaded" data-ll-status="loaded">
                                                                @endif
                                                        </div>
                                                        <div class="event-p-body">
                                                            <h3>{{$event->title}}</h3>
                                                            <hr>
                                                            <a href="{{route('event',$event->slug)}}" class="btn btn-light">View event</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                    <div class="col-md-12">
                                                        <div class="alert alert-danger">
                                                            <h3>No Event Found</h3>
                                                        </div>
                                                    </div>
                                                @endforelse


                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                -->
                    <!-- faculty member -->
                    <div class="container department-facultymember">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card border-secondary mb-3">
                                    <div class="card-header" style="background-color: #bbffd4;"><b>Faculty Member</b></div>
                                    <div class="card-body text-secondary">
                                        <div class="container">
                                            <div class="row">

                                                @forelse($department_faculty_member as $faculty)

                                                {{ dd($faculty)}}

                                                <div class="col-md-4">
                                                    <div class="event-p">
                                                        <div class="event-p-img">
                                                            @if ($faculty->image)
                                                            <img class="img-fluid"
                                                                src="{{ asset('assets/images/faculty') . '/' . $faculty->image }}"
                                                                alt="">
                                                        @else
                                                            <img src="//via.placeholder.com/350x150"
                                                                class="lazyloaded" data-ll-status="loaded">
                                                        @endif
                                                        </div>
                                                        <div class="event-p-body">
                                                            <h3>Faculty Member Name</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                @empty
                                                    <div class="col-md-12">
                                                        <div class="alert alert-danger">
                                                            <h3>No Faculty Member Found</h3>
                                                        </div>
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
            </div>
        </div>
    </div>
@endsection
