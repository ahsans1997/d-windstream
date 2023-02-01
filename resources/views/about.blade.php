@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row mb-4" style="border: 1px solid rgb(231, 226, 226); padding: 10px; border-radius: 7px">
                <div class="col-md-3 mt-3">
                    <!-- Tab navs -->
                    <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link border" id="v-tabs-historical-tab" data-mdb-toggle="tab" href="#v-tabs-historical"
                            role="tab" aria-controls="v-tabs-historical" aria-selected="true">Historical Overview</a>

                        <a class="nav-link border" id="v-tabs-vision-tab" data-mdb-toggle="tab" href="#v-tabs-vision"
                            role="tab" aria-controls="v-tabs-vision" aria-selected="false">Vision & Mission</a>

                        <a class="nav-link active border" id="v-tabs-Chairman-tab" data-mdb-toggle="tab" href="#v-tabs-Chairman"
                            role="tab" aria-controls="v-tabs-Chairman" aria-selected="false">Message From Chairman</a>

                        <a class="nav-link border" id="v-tabs-Principal-tab" data-mdb-toggle="tab" href="#v-tabs-Principal"
                            role="tab" aria-controls="v-tabs-Principal" aria-selected="false">Message From Principal</a>
                    </div>
                    <!-- Tab navs -->
                </div>

                <div class="col-md-9 mt-4" style="border: 1px solid rgb(231, 226, 226); border-radius: 7px; box-shadow: rgba(100, 100, 111, 0.2) 0px 3px 15px 5px;">
                    <!-- Tab content -->
                    <div class="tab-content" id="v-tabs-tabContent" style="padding: 5px">
                        <div class="tab-pane fade " id="v-tabs-historical" role="tabpanel"
                            aria-labelledby="v-tabs-historical-tab">
                            <h4 style="font-weight: 700; font-size: 24px; line-height: 35px;" class="blockquote mt-4">Historical Overview</h4>
                            {!! $about->historicaloverview !!}
                        </div>
                        <div class="tab-pane fade" id="v-tabs-vision" role="tabpanel" aria-labelledby="v-tabs-vision-tab">
                            <h3 style=" line-height: 35px; font-weight: 700; font-size: 40px;" class="blockquote mt-3">Mission & Vision</h3>
                            <hr>
                            <div class="mission-vision mx-4">
                                <h4 style="font-weight: 700; font-size: 24px" class="mt-4">Mission</h4>
                                {!! $about->mission !!}

                                <h4 style="font-weight: 700; font-size: 24px" class="mt-4">Vision</h4>
                                {!! $about->vision !!}
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="v-tabs-Chairman" role="tabpanel"
                            aria-labelledby="v-tabs-Chairman-tab">
                            <h4 style="font-weight: 700; font-size: 40px; line-height: 35px;" class="blockquote mt-4">Messages From Chairman</h4>
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <img class="img-fluid" src="{{ $about->getFirstMediaUrl('chairman') }}" alt="">
                                </div>
                                <div class="col-md-9">
                                    <h4 class="mt-2">{{ $about->cname }}</h4>
                                    <h5 class="mt-2">Chairman</h5>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <h5 style="font-weight: 900">Respected Teachers, Dear Students, Officers and Staffs:
                                    </h5>
                                    {!! $about->messagefromchairman !!}
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-tabs-Principal" role="tabpanel"
                            aria-labelledby="v-tabs-Principal-tab">
                            <h4 style="font-weight: 700; font-size: 40px; line-height: 35px;" class="blockquote mt-4">Messages Fron Principal</h4>
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <img class="img-fluid" src="{{ $about->getFirstMediaUrl('principal') }}" alt="">
                                </div>
                                <div class="col-md-9">
                                    <h4 class="mt-2">{{ $about->pname }}</h4>
                                    <h5 class="mt-2">Principal</h5>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <h5 style="font-weight: 900">Respected Teachers, Dear Students, Officers and Staffs:
                                    </h5>
                                    {!! $about->messagefromprincipal !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab content -->
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <style>
        .border{
            border: 1px solid gray;
        }
    </style>
    {{-- <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" /> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
@endpush
