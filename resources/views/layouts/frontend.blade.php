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
</head>

<body>
    <!-- Header Start -->
    <header>
        <div class="header">
            <div class="header-top black">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('/') }}frontend_asset/img/niterlogo.png" alt=""></a>
                            </div>
                            <div class="search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <span>Search</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('program') }}">Programs</a></li>
                                        <li><a href="{{ route('news') }}">News</a></li>
                                        <li><a href="{{ route('event') }}">Events</a></li>
                                        <li><a href="{{ route('department') }}">Department</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('research') }}">Research</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

       <!-- Footer Start -->
       <footer>
        <div class="social-link">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href=""><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a style="color: red;" href=""><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer">
                        <h4>Academic</h4>
                        <ul>
                            <li><a href="">Programs A-Z</a></li>
                            <li><a href="">Departments A-Z</a></li>
                        </ul>
                        <h4>Admission</h4>
                        <ul>
                            <li><a href="">Undergraduate Admission</a></li>
                            <li><a href="">Graduate Admission</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer">
                        <h4>About</h4>
                        <ul>
                            <li><a href="">Historical Overview</a></li>
                            <li><a href="">Vision & Mission</a></li>
                            <li><a href="">Faculty Member</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer">
                        <h4>Link</h4>
                        <ul>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">NITER Forms</a></li>
                            <li><a href="">Approved NOC</a></li>
                            <li><a href="">Career at NITER</a></li>
                            <li><a href="">Notice A-Z</a></li>
                            <li><a href="">Clubs & Society</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end" style="background-color: #bbffd4;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="height:100px;">
                        <div class="footer-left">
                            <img src="{{ asset('/') }}frontend_asset/img/niterlogo.png" alt="">
                        </div>
                        <div class="footer-right">
                            <nav>
                                <ul>
                                    <li><a href="">NITER Home</a></li>
                                    <li><a href="">Terms of Use</a></li>
                                    <li><a href="">Privacy</a></li>
                                    <li><a href=""> Accessibility</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="copyright">
                            <h5>&#169; NITER - All Rights Reserved. 2022</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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

</body>

</html>
