<footer>
    <div class="social-link mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href=""><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a style="color: red;" href=""><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer">
                    <h4>Academic</h4>
                    <ul>
                        <li><a href="{{ route('program') }}">Programs A-Z</a></li>
                        <li><a href="{{ route('department')}}">Departments A-Z</a></li>
                    </ul>
                    <h4>Admission</h4>
                    <ul>
                        <li><a href="{{ url('/undergraduate-program') }}">Undergraduate Admission</a></li>
                        <li><a href="{{ url('/graduate-program') }}">Graduate Admission</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <h4>About</h4>
                    <ul>
                        <li><a href="{{url('/historical-overview')}}">Historical Overview</a></li>
                        <li><a href="{{url('/vision-mission')}}">Vision & Mission</a></li>
                        <li><a href="{{route('faculty-member')}}">Faculty Member</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <h4>Link</h4>
                    <ul>
                        <li><a href="{{url('/faq')}}">FAQ</a></li>
                        <li><a target="_blank" href="{{url('/student-portal')}}">Student Portal</a></li>
                        <li><a target="_blank" href="{{url('/staff-portal')}}">Staff Portal</a></li>
                        <li><a target="_blank" href="{{url('/webmail-login')}}">Webmail Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <h4>Others</h4>
                    <ul>
                        <li><a href="{{ route('notice')}}">Notice A-Z</a></li>
                        <li><a href="{{url('/clubs-and-societies')}}">Clubs & Society</a></li>
                        <li><a href="{{url('/approved-noc')}}">Approved Noc</a></li>
                        <li><a href="{{url('/niter-form')}}">Niter Form</a></li>
                        <li><a href="{{url('/alumni')}}">Alumni</a></li>
                        <li><a href="{{ route('clubs') }}">Clubs</a></li>
                        <li><a href="{{ route('offices') }}">All Offices</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-end" style="background-color: #bbffd4;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-left">
                        <img src="{{ setting()->getFirstMediaUrl('web_logo') }}" alt="" style="height:50px;width:auto;">
                    </div>
                    <div class="footer-right">
                        <nav>
                            <ul>
                                <li><a href="{{url('/niter-form')}}">NITER Home</a></li>
                                <li><a href="{{url('/terms-of-use')}}">Terms of Use</a></li>
                                <li><a href="{{url('/privacy')}}">Privacy</a></li>
                                <li><a href="{{url('/accessibility')}}"> Accessibility</a></li>
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
