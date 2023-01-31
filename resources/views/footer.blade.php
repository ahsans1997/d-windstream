<footer>
    <div class="social-link mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @php
                        $social = json_decode(setting()->portal);
                    @endphp
                    <ul class="list-style">
                        <li><a href="{{ $social->facebook }}" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="{{ $social->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a style="color: red;" href="{{ $social->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
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
                    <ul class="list-style">
                        <li><a href="{{ route('program') }}">Programs A-Z</a></li>
                        <li><a href="{{ route('department')}}">Departments A-Z</a></li>
                        <li><a href="{{route('faculty-member')}}">All Faculty Member</a></li>
                    </ul>
                    <h4>Admission</h4>
                    <ul class="list-style">
                        <li><a href="{{ route('admission') }}">Undergraduate Admission</a></li>
                        <li><a href="{{ route('admission') }}">Graduate Admission</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <h4>About</h4>
                    <ul class="list-style">
                        <li><a href="{{ route('about') }}">Messages</a></li>
                        <li><a href="{{ route('about') }}">Historical Overview</a></li>
                        <li><a href="{{ route('about') }}">Vision & Mission</a></li>
                        <li><a href="{{ route('governingbody') }}">The Governing Body</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <h4>Link</h4>
                    <ul class="list-style">
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a target="_blank" href="{{url('/student-portal')}}">Student Portal</a></li>
                        <li><a target="_blank" href="{{url('/staff-portal')}}">Staff Portal</a></li>
                        <li><a target="_blank" href="{{url('/webmail-login')}}">Webmail Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <h4>Others</h4>
                    <ul class="list-style">
                        <li><a href="{{ route('notice')}}">Notice A-Z</a></li>
                        <li><a href="{{ route('clubs') }}">Clubs & Society</a></li>
                        <li><a href="{{route('noc')}}">Approved Noc</a></li>
                        <li><a href="{{route('form')}}">Niter Form</a></li>
                        <li><a href="{{route('career')}}">Career</a></li>
                        <li><a href="{{url('/alumni')}}">Alumni</a></li>
                        <li><a href="{{url('/seip')}}">SEIP</a></li>
                        <li><a href="{{ route('resources') }}">Resources</a></li>
                        <li><a href="{{ route('offices') }}">All Offices</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-end mt-4" style="background-color: #A3332C;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-left">
                        <img src="{{ setting()->getFirstMediaUrl('mobile_logo') }}" alt="" style="height:70px;width:auto;">
                    </div>
                    <div class="footer-right">
                        <nav>
                            <ul class="list-style">
                                <li><a style="color: #fff;" href="{{url('/')}}">NITER Home</a></li>
                                <li><a style="color: #fff;" href="{{url('/terms-of-use')}}">Terms of Use</a></li>
                            </ul>
                            <ul class="list-style">
                                <li><a style="color: #fff;" href="{{url('/privacy-policy')}}">Privacy</a></li>
                                <li><a style="color: #fff;" href="{{url('/accessibility')}}"> Accessibility</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="copyright text-white">

                        <h5>&#169; NITER - All Rights Reserved. {{ Carbon\Carbon::now()->format('Y'); }} </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
