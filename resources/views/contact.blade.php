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
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0" style="float: left">
                                    <button class="btn btn-link -icon" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" id="c-icon" aria-controls="collapseOne">
                                        General Enquiries

                                    </button>
                                </h5>
                                <h5 class="mb-0" style="float: right">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <i class="c-icon fa-solid fa-angle-down" id="c-icon" style="float: right"></i>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
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
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0" style="float: left;">
                                    <button class="btn btn-link collapsed" id="s-icon" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Students Accommodation
                                    </button>
                                </h5>
                                <h5 class="mb-0" style="float: right">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <i class="s-icon fa-solid fa-angle-right" id="s-icon" style="float: right"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
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
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0" style="float: left;">
                                    <button class="btn btn-link collapsed" id="e-icon" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Emergency
                                    </button>
                                </h5>
                                <h5 class="mb-0" style="float: right">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <i class="e-icon fa-solid fa-angle-right" id="e-icon" style="float: right"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
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
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Office of the Controller of Exam
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordion">
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
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        NITER Library
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
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
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Office of the Accounts and Audits
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordion">
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
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        IT Cell
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#accordion">
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
                            <div class="card-header" id="headingEight">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        CRIR of NITER
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                data-parent="#accordion">
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
                            <div class="card-header" id="headingNine">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Campus Location & Map
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                data-parent="#accordion">
                                <div class="card-body" style="margin-left: 40px">
                                    <p>
                                        <label for="">Address : </label>
                                        <span>{{ $location->locationaddress }}</span>
                                    </p>
                                    <p>
                                        <label for="">Location & Map : </label>
                                        <span><a href="{{ $location->locationmap }}" target="_blank" class="btn btn-success">View Map</a></span>
                                    </p>
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
    <script>
        $(document).ready(function () {
            $('#c-icon').on('click', function(){
                $('.c-icon').toggleClass('fa-angle-down');
                $('.c-icon').toggleClass('fa-angle-right');
                $('.s-icon').removeClass('fa-angle-down');
                $('.s-icon').addClass('fa-angle-right');
                $('.e-icon').removeClass('fa-angle-down');
                $('.e-icon').addClass('fa-angle-right');
            });
            $('#s-icon').on('click', function(){
                $('.s-icon').toggleClass('fa-angle-right');
                $('.s-icon').toggleClass('fa-angle-down');
                $('.c-icon').removeClass('fa-angle-down');
                $('.c-icon').addClass('fa-angle-right');
                $('.e-icon').removeClass('fa-angle-down');
                $('.e-icon').addClass('fa-angle-right');
            });
            $('#e-icon').on('click', function(){
                $('.e-icon').toggleClass('fa-angle-right');
                $('.e-icon').toggleClass('fa-angle-down');
                $('.c-icon').removeClass('fa-angle-down');
                $('.c-icon').addClass('fa-angle-right');
                $('.s-icon').removeClass('fa-angle-down');
                $('.s-icon').addClass('fa-angle-right');
            });
        });
    </script>
@endpush
