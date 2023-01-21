@extends('layouts.app')

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




    <div class="page-content">
        <div class="container-fluid">

            <div class="col-md-12">
                <div class="row w-100">
                    <div class="col-3">
                        <!-- Tab navs -->
                        <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active border" id="v-tabs-enquiries-tab" data-mdb-toggle="tab" href="#v-tabs-enquiries"
                                role="tab" aria-controls="v-tabs-enquiries" aria-selected="true">General Enquiries</a>
                            <a class="nav-link border" id="v-tabs-accommodation-tab" data-mdb-toggle="tab" href="#v-tabs-accommodation"
                                role="tab" aria-controls="v-tabs-accommodation" aria-selected="false">Students Accommodation</a>
                            <a class="nav-link border" id="v-tabs-emergency-tab" data-mdb-toggle="tab" href="#v-tabs-emergency"
                                role="tab" aria-controls="v-tabs-emergency" aria-selected="false">Emergency</a>
                            <a class="nav-link border" id="v-tabs-exam-tab" data-mdb-toggle="tab" href="#v-tabs-exam"
                                role="tab" aria-controls="v-tabs-exam" aria-selected="false">Office of the Controller of Exam</a>
                            <a class="nav-link border" id="v-tabs-library-tab" data-mdb-toggle="tab" href="#v-tabs-library"
                                role="tab" aria-controls="v-tabs-library" aria-selected="false">NITER Library</a>
                            <a class="nav-link border" id="v-tabs-accounts-tab" data-mdb-toggle="tab" href="#v-tabs-accounts"
                                role="tab" aria-controls="v-tabs-accounts" aria-selected="false">Office of the Accounts and Audits</a>
                            <a class="nav-link border" id="v-tabs-it-tab" data-mdb-toggle="tab" href="#v-tabs-it"
                                role="tab" aria-controls="v-tabs-it" aria-selected="false">IT Cell</a>
                            <a class="nav-link border" id="v-tabs-crir-tab" data-mdb-toggle="tab" href="#v-tabs-crir"
                                role="tab" aria-controls="v-tabs-crir" aria-selected="false">CRIR of NITER</a>
                            <a class="nav-link border" id="v-tabs-location-tab" data-mdb-toggle="tab" href="#v-tabs-location"
                                role="tab" aria-controls="v-tabs-location" aria-selected="false">Campus Location & Map</a>
                        </div>
                        <!-- Tab navs -->
                    </div>

                    <div class="col-9">
                        <!-- Tab content -->
                        <div class="tab-content" id="v-tabs-tabContent">
                            <div class="tab-pane fade show active" id="v-tabs-enquiries" role="tabpanel"
                                aria-labelledby="v-tabs-enquiries-tab">
                                <div class="card border-primary">
                                    <div class="card-header">General Enquiries</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $enquiries->enquiryphone }}" name="enquiryphone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $enquiries->enquiryemail }}" name="enquiryemail" class="form-control">
                                            <label for="">Postal Address</label>
                                            <input type="text" value="{{ $enquiries->enquiryaddress }}" name="enquiryaddress" class="form-control">
                                            <button type="submit" class="mt-3" style="float: right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-tabs-accommodation" role="tabpanel"
                                aria-labelledby="v-tabs-accommodation-tab">
                                <div class="card border-primary">
                                    <div class="card-header">Students Accommodation</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <h2>Boys : </h2>
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $accommodation->boys->accommodationboysphone }}" name="accommodationboysphone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $accommodation->boys->accommodationboysemail }}" name="accommodationboysemail" class="form-control">
                                            <br>
                                            <hr>
                                            <h2>Femail : </h2>
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $accommodation->female->accommodationfemalephone }}" name="accommodationfemalephone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $accommodation->female->accommodationfemaleemail }}" name="accommodationfemaleemail" class="form-control">
                                            <button type="submit" class="mt-3" style="float: right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-tabs-emergency" role="tabpanel"
                                aria-labelledby="v-tabs-emergency-tab">
                                <div class="card border-primary">
                                    <div class="card-header">Students Accommodation</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <h2>Medical : </h2>
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $emergency->medical->emergencymedicalphone }}" name="emergencymedicalphone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $emergency->medical->emergencymedicalemail }}" name="emergencymedicalemail" class="form-control">
                                            <br>
                                            <hr>
                                            <h2>Proctorial : </h2>
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $emergency->proctorial->emergencyproctorialphone }}" name="emergencyproctorialphone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $emergency->proctorial->emergencyproctorialemail }}" name="emergencyproctorialemail" class="form-control">
                                            <button type="submit" class="mt-3" style="float: right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-tabs-exam" role="tabpanel"
                                aria-labelledby="v-tabs-exam-tab">
                                <div class="card border-primary">
                                    <div class="card-header">Office of the Controller of Exam</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $exam->examphone }}" name="examphone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $exam->examemail }}" name="examemail" class="form-control">
                                            <button type="submit" class="mt-3" style="float: right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-tabs-library" role="tabpanel"
                                aria-labelledby="v-tabs-library-tab">
                                <div class="card border-primary">
                                    <div class="card-header">NITER Library</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $library->libraryphone }}" name="libraryphone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $library->libraryemail }}" name="libraryemail" class="form-control">
                                            <label for="">Online Support</label>
                                            <input type="text" value="{{ $library->libraryonlinesupport }}" name="libraryonlinesupport" class="form-control">
                                            <button type="submit" class="mt-3" style="float: right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-tabs-accounts" role="tabpanel"
                                aria-labelledby="v-tabs-accounts-tab">
                                <div class="card border-primary">
                                    <div class="card-header">Office of the Accounts and Audits</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $accounts->accountsphone }}" name="accountsphone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $accounts->accountsemail }}" name="accountsemail" class="form-control">
                                            <label for="">Bank Account Name & No</label>
                                            <input type="text" value="{{ $accounts->accountsbank }}" name="accountsbank" class="form-control">
                                            <button type="submit" class="mt-3" style="float: right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-tabs-it" role="tabpanel"
                                aria-labelledby="v-tabs-it-tab">
                                <div class="card border-primary">
                                    <div class="card-header">IT Cell</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $it->itphone }}" name="itphone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $it->itemail }}" name="itemail" class="form-control">
                                            <button type="submit" class="mt-3" style="float: right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-tabs-crir" role="tabpanel"
                                aria-labelledby="v-tabs-crir-tab">
                                <div class="card border-primary">
                                    <div class="card-header">CRIR of NITER</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="">Phone</label>
                                            <input type="text" value="{{ $crir->crirphone }}" name="crirphone" class="form-control">
                                            <label for="">Email</label>
                                            <input type="text" value="{{ $crir->criremail }}" name="criremail" class="form-control">
                                            <button type="submit" class="mt-3" style="float: right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-tabs-location" role="tabpanel"
                                aria-labelledby="v-tabs-location-tab">
                                <div class="card border-primary">
                                    <div class="card-header">Campus Location & Map</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="">Address</label>
                                            <input type="text" value="{{ $location->locationaddress }}" name="locationaddress" class="form-control">
                                            <label for="">Map link</label>
                                            <input type="text" value="{{ $location->locationmap }}" name="locationmap" class="form-control">
                                            <button type="submit" class="mt-3" style="float: right">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab content -->
                    </div>
                </div>
            </div>



            <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection


@push('script')
    <style>
        .border {
            border: 1px solid gray;
        }
    </style>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
@endpush
