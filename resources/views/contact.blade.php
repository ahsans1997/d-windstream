@extends('layouts.frontend')

@section('content')
    @php
        $enquiries = json_decode($contact->enquiries);
        $accommodation = json_decode($contact->accommodation);
        $emergency = json_decode($contact->emergency);
        $exam = json_decode($contact->exam);
        $library = json_decode($contact->library);
        $accounts = json_decode($contact->accounts);
        $it = json_decode($contact->it);
        $crir = json_decode($contact->crir);
        $location = json_decode($contact->location);
    @endphp

    <div class="main-div mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="main">
                        <div class="container">
                            <div class="accordion" id="faq">
                                <div class="card">
                                    <div class="card-header" id="faqhead1">

                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#faq1" aria-expanded="true" aria-controls="faq1">General
                                            Enquiries</a>
                                    </div>

                                    <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                        <div class="card-body" style="margin-left: 40px">
                                            <p>
                                                <label for="">Phone : </label>
                                                <span>{{ $enquiries->enquiryphone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $enquiries->enquiryemail }}</span>
                                            </p>
                                            <p>
                                                <label for="">Address : </label>
                                                <span>{{ $enquiries->enquiryaddress }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="faqhead2">

                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#faq2" aria-expanded="true" aria-controls="faq2">Students
                                            Accommodation</a>
                                    </div>

                                    <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                        <div class="card-body" style="margin-left: 40px">
                                            <h2><u>Boys Hostel</u></h2>
                                            <p>
                                                <label for="">Phone : </label>
                                                <span>{{ $accommodation->boys->accommodationboysphone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $accommodation->boys->accommodationboysemail }}</span>
                                            </p>
                                            <hr>
                                            <h2><u>Girls Hostel</u></h2>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $accommodation->female->accommodationfemalephone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $accommodation->female->accommodationfemaleemail }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="faqhead3">

                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#faq3" aria-expanded="true" aria-controls="faq3">Emergency</a>
                                    </div>

                                    <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                        <div class="card-body" style="margin-left: 40px">
                                            <h2><u>Medical Team</u></h2>
                                            <p>
                                                <label for="">Phone : </label>
                                                <span>{{ $emergency->medical->emergencymedicalphone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $emergency->medical->emergencymedicalemail }}</span>
                                            </p>
                                            <hr>
                                            <h2><u>Proctorial Team</u></h2>
                                            <p>
                                                <label for="">Phone : </label>
                                                <span>{{ $emergency->proctorial->emergencyproctorialphone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $emergency->proctorial->emergencyproctorialemail }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="faqhead4">

                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#faq4" aria-expanded="true" aria-controls="faq4">Office of the
                                            Controller of Exam</a>
                                    </div>

                                    <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                        <div class="card-body" style="margin-left: 40px">
                                            <p>
                                                <label for="">Phone : </label>
                                                <span>{{ $exam->examphone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $exam->examemail }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="faqhead5">

                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#faq5" aria-expanded="true" aria-controls="faq5">NITER Library</a>
                                    </div>

                                    <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                        <div class="card-body" style="margin-left: 40px">
                                            <p>
                                                <label for="">Phone : </label>
                                                <span>{{ $library->libraryphone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $library->libraryemail }}</span>
                                            </p>
                                            <p>
                                                <label for="">Online Support : </label>
                                                <span>{{ $library->libraryonlinesupport }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="faqhead6">

                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#faq6" aria-expanded="true" aria-controls="faq6">NITER
                                            Library</a>
                                    </div>

                                    <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                        <div class="card-body" style="margin-left: 40px">
                                            <p>
                                                <label for="">Phone : </label>
                                                <span>{{ $accounts->accountsphone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $accounts->accountsemail }}</span>
                                            </p>
                                            <p>
                                                <label for="">Bank Account Name & No : </label>
                                                <span>{{ $accounts->accountsbank }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="faqhead7">

                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#faq7" aria-expanded="true" aria-controls="faq7">IT Cell</a>
                                    </div>

                                    <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                        <div class="card-body" style="margin-left: 40px">
                                            <p>
                                                <label for="">Phone : </label>
                                                <span>{{ $it->itphone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $it->itemail }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="faqhead8">

                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#faq8" aria-expanded="true" aria-controls="faq8">CRIR of
                                            NITER</a>
                                    </div>

                                    <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                                        <div class="card-body" style="margin-left: 40px">
                                            <p>
                                                <label for="">Phone : </label>
                                                <span>{{ $crir->crirphone }}</span>
                                            </p>
                                            <p>
                                                <label for="">Email : </label>
                                                <span>{{ $crir->criremail }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="faqhead9">

                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#faq9" aria-expanded="true" aria-controls="faq9">Campus Location
                                            & Map</a>
                                    </div>

                                    <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                                        <div class="card-body" style="margin-left: 40px">
                                            <p>
                                                <label for="">Address : </label>
                                                <span>{{ $location->locationaddress }}</span>
                                            </p>
                                            <p>
                                                <label for="">Location & Map : </label>
                                                <span><a href="{{ $location->locationmap }}" target="_blank"
                                                        class="btn btn-success">View Map</a></span>
                                            </p>
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


@push('script')
    <style>
        #main {
            margin: 50px 0;
        }

        #main #faq .card {
            margin-bottom: 2px;
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
            background: rgb(245 242 242);
            line-height: 30px;
        }

        #main #faq .card .collapse {
            border: 0;
        }

        #main #faq .card .collapse.show {
            background: rgb(245 242 242);
            line-height: 30px;
            color: #222;
        }
    </style>
@endpush
