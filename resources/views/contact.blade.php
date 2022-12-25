@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-header">
                        <h2>Contact OF NITER</h2>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>Contact Details</h3>
                        <hr>
                        <div class="contact-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <i class="fa-solid fa-map-location-dot"></i>
                                        <div class="contact-body-info">
                                            <h4>Address</h4>
                                            <p>NITER, Nayarhat Savar, Dhaka 1350 Bangladesh</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fa-solid fa-phone-volume"></i>
                                        <div class="contact-body-info">
                                            <h4>Call us</h4>
                                            <p>01755-060275</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                        <div class="contact-body-info">
                                            <h4>Mail</h4>
                                            <p>ad.niter@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fa-brands fa-facebook"></i>
                                        <div class="contact-body-info">
                                            <h4>Facebook</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>Send Us A Message</h3>
                        <hr>
                        <div class="contact-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Message</label>
                                    <textarea name="" id="" class="form-control" cols="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-map">
                        <h3>Google Map</h3>
                        <hr>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.230071552741!2d90.22937307608241!3d23.916905782362296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e8dae5260da7%3A0x20a78235074c8264!2z4Kac4Ka-4Kak4KeA4KefIOCmrOCmuOCnjeCmpOCnjeCmsCDgpqrgp43gprDgppXgp4zgprbgprIg4KaTIOCml-CmrOCnh-Cmt-Cmo-CmviDgpofgpqjgprjgp43gpp_gpr_gpp_gpr_gpongpp8gLSDgpqjgpr_gpp_gpr7gprA!5e0!3m2!1sen!2sbd!4v1671945621621!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
