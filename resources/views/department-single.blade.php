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
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header" style="background-color: #A3332C; color:white"><b>Latest
                                            News</b></div>
                                    <div class="card-body text-secondary">
                                        <div class="container">
                                            <div class="row">

                                                @foreach ($department_news_featured as $n)
                                                    <div class="col-md-6 news-banner-6">
                                                        <div class="news">
                                                            @if ($n->image)
                                                                <img class="img-fluid"
                                                                    src="{{ $n->getFirstMediaUrl('news') }}" alt="">
                                                            @else
                                                                <img src="{{ asset('/') }}frontend_asset/img/news/1.jpg"
                                                                    class="lazyloaded" data-ll-status="loaded">
                                                            @endif
                                                            <div class="news-image-body">
                                                                <p>{{ $n->department->name }}</p>
                                                                <h4><a href="">{{ $n->title }}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-header" style="background-color: #A3332C; color:white"><b>Latest
                                            News</b></div>
                                    <div class="card-body text-secondary">
                                        <div class="container">
                                            <div class="row">

                                                @forelse($department_news as $news)
                                                    <ul class="d-block">
                                                        <li class="flex justify-around">
                                                            <a class="text-dark" href="{{ url('/news', $news->slug) }}"><i
                                                                    class="fa fa-link"></i>
                                                                {{ Str::limit($news->title, 20) }}</a>
                                                            <span>{{ $news->created_at->format('d-M-Y') }}</span>
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
                                <div class="card mb-3">
                                    <div class="card-header" style="background-color: #A3332C; color:white"><b>Latest
                                            Events</b></div>
                                    <div class="card-body text-secondary">
                                        <div class="container">
                                            <div class="row">
                                                @forelse($department_events as $event)
                                                    <ul class="d-block">
                                                        <li class="flex justify-around">
                                                            <a class="text-dark"
                                                                href="{{ url('/event', $event->slug) }}"><i
                                                                    class="fa fa-link"></i>
                                                                {{ Str::limit($event->title, 20) }}</a>
                                                            <span>{{ $event->created_at->format('d-M-Y') }}</span>
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
                                                                                                        <h3>{{ $event->title }}</h3>
                                                                                                        <hr>
                                                                                                        <a href="{{ route('event', $event->slug) }}" class="btn btn-light">View event</a>
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
                                <div class="card mb-3">
                                    <div class="card-header" style="background-color: #A3332C; color:white"><b>Faculty
                                            Member</b></div>
                                    <div class="card-body text-secondary">
                                        <div class="container">
                                            <div class="row">

                                                @forelse($department_faculty_member as $faculty)
                                                    {{-- {{ dd($faculty)}} --}}

                                                    <div class="col-md-3 department_event_card">
                                                        <div class="event-p">
                                                            <div class="event-p-img">
                                                                @if ($faculty->image)
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('storage/facultyMember') . '/' . $faculty->image }}"
                                                                        alt="">
                                                                @else
                                                                    <img src="//via.placeholder.com/350x150"
                                                                        class="lazyloaded" data-ll-status="loaded">
                                                                @endif
                                                            </div>
                                                            <div class="event-p-body text-center">
                                                                <h5 class="mt-3"><a class="list-style"
                                                                        href="{{ url('member-profile', $faculty->slug) }}">{{ $faculty->name }}</a>
                                                                </h5>
                                                                <p>{{ $faculty->designation->name }}</p>
                                                                <a href="{{ url('member-profile', $faculty->slug) }}"
                                                                    class="btn" style="background-color: #A3332C; color:white">View Profile</a>
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
                    @if ($department_lab_facility)
                        <div class="container department-facultymember">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-header" style="background-color: #A3332C; color:white"><b>Lab
                                                Facility</b>
                                        </div>
                                        <div class="card-body text-secondary">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="main">
                                                            <div class="container">
                                                                <div class="accordion" id="faq">
                                                                    @foreach ($department_lab_facility as $department_lab_facility)
                                                                        <div class="card">
                                                                            <div class="card-header"
                                                                                id="faqhead{{ $department_lab_facility->id }}">

                                                                                <a href="#"
                                                                                    class="btn btn-header-link collapsed"
                                                                                    data-toggle="collapse"
                                                                                    data-target="#faq{{ $department_lab_facility->id }}"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="faq{{ $department_lab_facility->id }}">{{ $department_lab_facility->title }}</a>
                                                                            </div>

                                                                            <div id="faq{{ $department_lab_facility->id }}"
                                                                                class="collapse"
                                                                                aria-labelledby="faqhead{{ $department_lab_facility->id }}"
                                                                                data-parent="#faq">
                                                                                <div class="card-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-5">
                                                                                            <img class="img-fluid"
                                                                                                src="{{ $department_lab_facility->getFirstMediaUrl('labfacility') }}"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <div class="col-md-7">
                                                                                            <p>{!! $department_lab_facility->description !!}
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
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
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <style>
        #main {
            margin: 50px 0;
        }

        #main #faq .card {
            margin-bottom: 30px;
            border: 0;
        }

        #main #faq .card .card-header {
            border: 0;
            -webkit-box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
            box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
            border-radius: 2px;
            padding: 0;
        }

        #main #faq .card .card-header .btn-header-link {
            color: #fff;
            display: block;
            text-align: left;
            background: #A3332C;
            padding: 20px;
        }

        #main #faq .card .card-header .btn-header-link:after {
            content: "\f107";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            float: right;
        }

        #main #faq .card .card-header .btn-header-link.collapsed {
            background: #A3332C;
            color: #fff;
        }

        #main #faq .card .card-header .btn-header-link.collapsed:after {
            content: "\f105";
        }

        #main #faq .card .collapsing {
            background: #fff;
            line-height: 30px;
        }

        #main #faq .card .collapse {
            border: 0;
        }

        #main #faq .card .collapse.show {
            background: #fff;
            line-height: 30px;
            color: #222;
        }
    </style>
@endpush
