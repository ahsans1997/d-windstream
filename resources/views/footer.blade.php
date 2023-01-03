<footer>
    <div class="social-link">
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
                        <li><a href="{{route('program')}}">Undergraduate Admission</a></li>
                        <li><a href="route('program')">Graduate Admission</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <h4>About</h4>
                    <ul>
                        <li><a href="">Historical Overview</a></li>
                        <li><a href="">Vision & Mission</a></li>
                        <li><a href="{{route('faculty-member')}}">Faculty Member</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <h4>Link</h4>
                    <ul>
                        <li><a href="">FAQ</a></li>
                        <li><a target="_blank" href="{{ portallink()->student_portal }}">Student Portal</a></li>
                        <li><a target="_blank" href="{{ portallink()->teacher_portal }}">Staff Portal</a></li>
                        <li><a target="_blank" href="https://mail.google.com">Webmail Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <h4>Otheres</h4>
                    <ul>
                        <li><a href="{{ route('notice')}}">Notice A-Z</a></li>
                        <li><a href="">Clubs & Society</a></li>
                        <li><a href="">Approved Noc</a></li>
                        <li><a href="">Niter Form</a></li>
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
                        <img src="{{ asset('/') }}assets/images/logo.png" alt="">
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
