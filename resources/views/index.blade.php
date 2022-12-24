<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}frontend_asset/css/style.css">
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
            <div class="header-bottom">
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

        <div class="banner">
            <img src="{{ asset('/') }}frontend_asset/img/banner.jpg" alt="">
        </div>
    </header>
    <!-- Header End -->

    <!-- Accelerating climate solutions Start -->
    <section style="height: 1020px;">
        <div class="container color-black">
            <div class="row">
                <div class="col-md-12 accelerating-climate-solutions-header color-black">
                    <h2><b>Accelerating climate solutions</b></h2>
                    <p>The new Stanford Doerr School of Sustainability is designed to tackle urgent global challenges</p>
                </div>
                <div class="col-md-4 accelerating-climate-solutions">
                    <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/Accelerating/1.JPG" alt="">
                    <h3>Generating knowledge</h3>
                    <p>Experts across seven departments will expand understanding of the natural world and its intersections with human society</p>
                    <a href="">Departments <i class="fa-solid fa-angle-right"></i></a>
                </div>
                <div class="col-md-4 accelerating-climate-solutions">
                    <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/Accelerating/2.JPG" alt="">
                    <h3>Generating knowledge</h3>
                    <p>Experts across seven departments will expand understanding of the natural world and its intersections with human society</p>
                    <a href="">Institutes <i class="fa-solid fa-angle-right"></i></a>
                </div>
                <div class="col-md-4 accelerating-climate-solutions">
                    <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/Accelerating/3.jpg" alt="">
                    <h3>Generating knowledge</h3>
                    <p>Experts across seven departments will expand understanding of the natural world and its intersections with human society</p>
                    <a href="">Sustainability Accelerator <i class="fa-solid fa-angle-right"></i></a>
                </div>
                <div class="col-md-12 seven-schools-in-which-to-pursue-your-passions">
                    <h3><b>Seven schools in which to pursue your passions</b></h3>
                    <ul>
                        <li><a href="">Medicine</a></li>
                        <li><a href="">Law</a></li>
                        <li><a href="">Humanities & Sciences</a></li>
                        <li><a href="">Engineering</a></li>
                        <li><a href="">Education</a></li>
                        <li><a href="">Sustainability</a></li>
                        <li><a href="">Business</a></li>
                    </ul>
                    <h5><a href="">More About Academics</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Accelerating climate solutions End -->

    <!-- News Start -->
    <section style="background-color: #F9F6EF;height: 1100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 news-header color-black">
                    <h2><b>University News</b></h2>
                    <p>Stories about people, research and innovation across the Farm</p>
                </div>
                <div class="col-md-6 news-banner-6">
                    <div class="news">
                        <img class="img-fluid photo" src="{{ asset('/') }}frontend_asset/img/news/1.jpg" alt="">
                        <div class="news-image-body">
                            <p>SCIENCE & TECHNOLOGY</p>
                            <h4><a href=""><b>Pandemic stress physically aged teens’ brains, a new study finds</b></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 news-banner-3">
                    <div class="news">
                        <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/2.jpg" alt="">
                        <div class="news-banner-body">
                                <p>SCIENCE & TECHNOLOGY</p>
                                <h5><a href=""><b>Striking inequalities in maternal and infant health</b></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 news-banner-3">
                    <div class="news">
                        <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/3.webp" alt="">
                        <div class="news-banner-body">
                                <p>SCIENCE & TECHNOLOGY</p>
                                <h5><a href=""><b>Striking inequalities in maternal and infant health</b></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 news-banner-3">
                    <div class="news">
                        <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/4.webp" alt="">
                        <div class="news-banner-body">
                                <p>SCIENCE & TECHNOLOGY</p>
                                <h5><a href=""><b>Striking inequalities in maternal and infant health</b></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 news-banner-3">
                    <div class="news">
                        <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/5.jpg" alt="">
                        <div class="news-banner-body">
                                <p>SCIENCE & TECHNOLOGY</p>
                                <h5><a href=""><b>Striking inequalities in maternal and infant health</b></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 news-banner-6">
                    <div class="news">
                        <img class="img-fluid photo" src="{{ asset('/') }}frontend_asset/img/news/6.jpg" alt="">
                        <div class="news-image-body">
                            <p>SCIENCE & TECHNOLOGY</p>
                            <h4><a href=""><b>Pandemic stress physically aged teens’ brains, a new study finds</b></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="news-footer">
                        <h5><a href="">More About University News</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News End -->

    <!-- Research Start -->
    <section style="height: 955px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="research-top color-black">
                        <h3><b>Research & Scholarship</b></h3>
                        <p>Driving discoveries vital to our world, our health, and our intellectual life</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="research-info">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3><b>19 Institutes</b></h3>
                                    <p>cross disciplinary boundaries</p>
                                </div>
                                <div class="col-md-4">
                                    <h3><b>20 Libraries</b></h3>
                                    <p>hold over 9.5 million volumes</p>
                                </div>
                                <div class="col-md-4">
                                    <h3><b>$1.69 Billion</b></h3>
                                    <p>sponsored research budget</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="research">
                        <div class="research-image">
                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/research/1.JPG" alt="">
                        </div>
                        <div class="research-body">
                            <p>SCIENCE & TECHNOLOGY</p>
                            <h4><a href="">Understanding wildfire season</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="research">
                        <div class="research-image">
                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/research/2.JPG" alt="">
                        </div>
                        <div class="research-body">
                            <p>SCIENCE & TECHNOLOGY</p>
                            <h4><a href="">Understanding wildfire season</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="research">
                        <div class="research-image">
                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/research/3.jpg" alt="">
                        </div>
                        <div class="research-body">
                            <p>SCIENCE & TECHNOLOGY</p>
                            <h4><a href="">Understanding wildfire season</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="research">
                        <div class="research-image">
                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/research/4.JPG" alt="">
                        </div>
                        <div class="research-body">
                            <p>SCIENCE & TECHNOLOGY</p>
                            <h4><a href="">Understanding wildfire season</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="research-footer">
                        <h5><a href="">More About Research</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Research End -->

    <!-- Upcoming Events Start -->
    <section style="background-color: #2F2424; height: 845px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-header">
                        <h3><b>Upcoming Events</b></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event">
                        <div class="image">
                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/Events/1.jpg" alt="">
                        </div>
                        <div class="event-date">
                            <p>Nov</p>
                            <p>30</p>
                        </div>
                        <div class="event-body">
                            <h4>CONFERENCE/SYMPOSIUM</h4>
                            <h3><a href="">StorageX International Symposium</a></h3>
                            <h5>10:30 AM</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event">
                        <div class="image">
                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/Events/2.JPG" alt="">
                        </div>
                        <div class="event-date">
                            <p>Nov</p>
                            <p>30</p>
                        </div>
                        <div class="event-body">
                            <h4>CONFERENCE/SYMPOSIUM</h4>
                            <h3><a href="">StorageX International Symposium</a></h3>
                            <h5>10:30 AM</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event">
                        <div class="image">
                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/Events/3.JPG" alt="">
                        </div>
                        <div class="event-date">
                            <p>Nov</p>
                            <p>30</p>
                        </div>
                        <div class="event-body">
                            <h4>CONFERENCE/SYMPOSIUM</h4>
                            <h3><a href="">StorageX International Symposium</a></h3>
                            <h5>10:30 AM</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event">
                        <div class="image">
                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/Events/4.jpg" alt="">
                        </div>
                        <div class="event-date">
                            <p>Nov</p>
                            <p>30</p>
                        </div>
                        <div class="event-body">
                            <h4>CONFERENCE/SYMPOSIUM</h4>
                            <h3><a href="">StorageX International Symposium</a></h3>
                            <h5>10:30 AM</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="more-event"><a href="">More About Event</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Events End -->

    <!-- About Start -->
    <section style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="h-about-header color-black">
                        <h3><b>About NITER</b></h3>
                        <p>A place for learning, discovery, innovation, expression and discourse</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="h-about-body">
                        <h5>Opening In</h5>
                        <h3><b>1979</b></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="h-about-body">
                        <h5>Student</h5>
                        <h3><b>1,712</b></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="h-about-body">
                        <h5>Faculty</h5>
                        <h3><b>10+</b></h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="h-about-link">
                        <h5><a href="">More about NITER</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-about-image">
            <img src="{{ asset('/') }}frontend_asset/img/h-about-banner.jpg" alt="">
        </div>
    </section>
    <!-- About End -->

    <!-- Footer Start -->
    <footer >
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
                            <li><a href="">Notice  A-Z</a></li>
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
                            <img src="asset/img/niterlogo.png" alt="">
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



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function(){
            if ($(window).scrollTop()) {
                $(".header-top").addClass("black");
            }
            else{
                $(".header-top").removeClass("black");
            }
            if ($(window).scrollTop()) {
                $(".header-bottom").addClass("header-white");
            }
            else{
                $(".header-bottom").removeClass("header-white");
            }
        });
    </script>
</body>
</html>
