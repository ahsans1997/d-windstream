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
        .display{
            display: none;
        }

        .niter-text a {
            font-size: 40px;
            font-weight: 900;
            color: #fff;
            margin: 0;
            line-height: 1.5;
            text-decoration: none;
            line-height: 40px;
        }
        @media (max-width:991px){
            .display{
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="niter-text text-center mt-3 site-title">
                            <a href="{{ url('/') }}"><span>National Institute of</span> Textile Engineering &
                                Research</a>
                        </div>
                    </div>
                    {{-- <div class="scroll-menu" style="margin-top:7px">
                        <button class="navbar-toggler collapsed mobile-nav-button" type="button"
                            data-toggle="collapse" data-target="#navbarTogglerDemo03"
                            aria-controls="navbarTogglerDemo03" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="menu-close">X</span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div> --}}
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

    <div class="breadcrumb-area shadow dark  text-center text-light"
        style="height:100px; background-image: url({{ default_header_banner('faculty-member') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="page-title">{{ $title ?? '' }}</h1>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        $(window).scroll(function() {

        if ($(window).scrollTop()) {
            $('.header').addClass('sticky');
            $('.logo').removeClass('display');

        } else {
            $('.header').removeClass('sticky');
            $('.logo').addClass('display');
        }

        // if ($(window).scrollTop()) {
        //     $(".header-top").addClass("black");
        // } else {
        //     $(".header-top").removeClass("black");
        // }
        // if ($(window).scrollTop()) {
        //     $(".header-bottom").addClass("header-white");
        //     $(".header-bottom").addClass("remove-header");
        // } else {
        //     $(".header-bottom").removeClass("header-white");
        //     $(".header-bottom").removeClass("remove-header");
        // }
        });
    </script>


    @stack('script')

</body>

</html>
