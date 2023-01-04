<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}frontend_asset/css/style.css">
    <style>
        .footer-image{
            height:200px;
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    <header>
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img
                                        src="{{ asset('/') }}assets/images/{{ $settings->web_logo }}" style="height:50px;width:auto;" alt=""></a>
                            </div>
                            <div class="search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <span>Search</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @include('nav')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide" style="overflow:hidden;max-height:100vh"
            data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('/') }}assets/images/banner/{{ $settings->homebanner }}" alt="First slide">
                </div>
            </div>

        </div>

    </header>
    @php
        $part1 = json_decode($homesection->part1);
        $part2 = json_decode($homesection->part2);
        $part3 = json_decode($homesection->part3);
    @endphp
    <section class="academic-section section">
        <div class="container color-black">
            <div class="row">
                <div class="col-md-12 accelerating-climate-solutions-header color-black">
                    <h2 class="section-header">{{ $homesection->section_1_title }}</h2>
                    <p>{{ $homesection->section_1_description }}</p>
                </div>
                <div class="col-md-4 accelerating-climate-solutions">
                    <img class="img-fluid" src="{{ asset('/') }}assets/images/section_1/{{ $homesection->part1_image }}"
                        alt="">
                    <h3>{{ $part1->part1_title }}</h3>
                    <p>{{ $part1->part1_description }}</p>
                    <a href="{{ $part1->part1_link }}">{{ $part1->part1_link_name }} <i class="fa-solid fa-angle-right"></i></a>
                </div>
                <div class="col-md-4 accelerating-climate-solutions">
                    <img class="img-fluid" src="{{ asset('/') }}assets/images/section_1/{{ $homesection->part2_image }}"
                        alt="">
                    <h3>{{ $part2->part2_title }}</h3>
                    <p>{{ $part2->part2_description }}</p>
                    <a href="{{ $part2->part2_link }}">{{ $part2->part2_link_name }} <i class="fa-solid fa-angle-right"></i></a>
                </div>
                <div class="col-md-4 accelerating-climate-solutions">
                    <img class="img-fluid" src="{{ asset('/') }}assets/images/section_1/{{ $homesection->part3_image }}"
                        alt="">
                    <h3>{{ $part3->part3_title }}</h3>
                    <p>{{ $part3->part3_description }}</p>
                    <a href="{{ $part3->part3_link }}">{{ $part3->part3_link_name }} <i class="fa-solid fa-angle-right"></i></a>
                </div>

                <div class="col-md-12 seven-schools-in-which-to-pursue-your-passions">
                    <h3>{{ ucwords(numberToWord($departments->count())) }} schools in which to pursue your passions</h3>
                    <div class="home-departments">
                        <nav>
                            <ul>
                                @foreach ($departments as $department)
                                    <li><a
                                            href="{{ route('department', $department->slug) }}">{{ $department->department_short_form }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                </div>
                <div class="col-md-12 text-center">
                    <a href="{{ route('department') }}" class="more">More About Department</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Accelerating climate solutions End -->

    <!-- News Start -->
    <section class="news-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 news-header color-black">
                    <h2 class="section-header"><b>University News</b></h2>
                    <p></p>
                </div>

                    <div class="col-md-6 news-banner-6">
                        <div class="news">
                            <img class="img-fluid photo" src="{{ asset('/') }}frontend_asset/img/news/1.jpg"
                                alt="">
                            <div class="news-image-body">
                                <p>Cse</p>
                                <h4><a href=""><b>Pandemic stress physically aged teens’ brains, a new study
                                            finds</b></a></h4>
                            </div>
                        </div>
                    </div>

                @foreach ($news as $n)
                    <div class="col-md-3 news-banner-3">
                        <div class="news">
                            <img class="img-fluid" src="{{ asset('/') }}assets/images/news/{{ $n->image }}" alt="">
                            <div class="news-banner-body">
                                <p>{{ $n->department->name }}</p>
                                <h5><a href="{{ route('news.single',$n->slug) }}">{{ Str::words($n->title, 6) }}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-md-6 news-banner-6">
                    <div class="news">
                        <img class="img-fluid photo" src="{{ asset('/') }}frontend_asset/img/news/6.jpg"
                            alt="">
                        <div class="news-image-body">
                            <p>SCIENCE & TECHNOLOGY</p>
                            <h4><a href=""><b>Pandemic stress physically aged teens’ brains, a new study
                                        finds</b></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a href="{{ route('news') }}" class="more">More About University News</a>
                </div>
            </div>
        </div>
    </section>
    <!-- News End -->

    <!-- Research Start -->
    @php
        $research = json_decode($settings->home_research);
    @endphp
    <section class="research-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="research-top color-black">
                        <h3 class="section-header">{{ $research->title }}</h3>
                        <p>{{ $research->research_description }}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="research-info">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3 class="counter"><span data-max="{{ $research->section_1->section_1_count }}"></span> {{ $research->section_1->section_1_title }}</h3>
                                    <p>{{ $research->section_1->section_1_description }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h3><b><span data-max="{{ $research->section_2->section_2_count }}"></span> {{ $research->section_2->section_2_title }}</b></h3>
                                    <p>{{ $research->section_2->section_2_description }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h3><b><span data-max="{{ $research->section_3->section_3_count }}"></span> {{ $research->section_3->section_3_title }}</b></h3>
                                    <p>{{ $research->section_3->section_3_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($researches as $research)
                    <div class="col-md-3">
                        <div class="research">
                            <div class="research-image">
                                <img class="img-fluid" src="{{ asset('/') }}assets/images/research/{{ $research->image }}"
                                    alt="">
                            </div>
                            <div class="research-body">
                                <p>{{ $research->department->name }}</p>
                                <h4><a href="">{{ Str::words($research->title, 8) }}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 text-center">
                    <a class="more" href="{{ route('research') }}">More About Research</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Research End -->

    <!-- Upcoming Events Start -->
    <section class="section" style="background-color: #2F2424;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-header">
                        <h3 class="section-header"><b>Upcoming Events</b></h3>
                    </div>
                </div>
                @foreach ($events as $event)
                    <div class="col-md-3">
                        <div class="event">
                            <div class="image">
                                <img class="img-fluid" src="{{ asset('/') }}assets/images/Events/{{ $event->image }}"
                                    alt="">
                            </div>
                            <div class="event-date">
                                <p>{{ date('M', strtotime($event->datetime)) }}</p>
                                <p>{{ date('d', strtotime($event->datetime)) }}</p>
                            </div>
                            <div class="event-body">
                                <h4>{{ $event->department->name }}</h4>
                                <h3><a href="{{ route('event.single',$event->slug) }}">{{ Str::words($event->title, 5) }}</a></h3>
                                <h5>{{ date('h:i', strtotime($event->datetime)) }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-md-12 text-center">
                    <a class="more" href="{{ route('event') }}">More About Event</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Events End -->

    <!-- About Start -->
    @php
        $about = json_decode($settings->home_about);
    @endphp
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="h-about-header color-black">
                        <h3 class="section-header"><b>{{ $about->about_title }}</b></h3>
                        <p>{{ $about->about_description }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-about-body">
                        <h5>{{ $about->about_section_1->about_section_1_title }}</h5>
                        <h3><span data-max="{{ $about->about_section_1->about_section_1_count }}"></span></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-about-body">
                        <h5>{{ $about->about_section_2->about_section_2_title }}</h5>
                        <h3><span data-max="{{ $about->about_section_2->about_section_2_count }}"></span></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-about-body">
                        <h5>{{ $about->about_section_3->about_section_3_title }}</h5>
                        <h3><span data-max="{{ $about->about_section_3->about_section_3_count }}"></span></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-about-body">
                        <h5>{{ $about->about_section_4->about_section_4_title }}</h5>
                        <h3><span data-max="{{ $about->about_section_4->about_section_4_count }}"></span></h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="h-about-link">
                        <h5><a href="{{ route('about') }}">More about NITER</a></h5>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="footer-image" style="background-image: url({{ url('assets/images/banner').'/'.$settings->homefooterbanner }})">
    </div>
    <!-- About End -->
    @include('footer')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/') }}frontend_asset/js/counter.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop()) {
                $(".header-top").addClass("black");
            } else {
                $(".header-top").removeClass("black");
            }
            if ($(window).scrollTop()) {
                $(".header-bottom").addClass("header-white");
            } else {
                $(".header-bottom").removeClass("header-white");
            }
        });
    </script>


</body>

</html>
