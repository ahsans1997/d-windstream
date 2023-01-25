@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container program-single">
            <div class="row">

                <div class="col-md-10">
                    <div class="">
                        <h2 class="mb-5"><strong>{{ $admission->title }}</strong></h2>

                        <div class="card mt-5 mb-4 tabbox">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item rounded-0" role="presentation">
                                    <button class="nav-link active rounded-0" id="home-tab" data-toggle="tab"
                                        data-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-0" id="profile-tab" data-toggle="tab"
                                        data-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Notice</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-0" id="contact-tab" data-toggle="tab"
                                        data-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Attachment</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="card-body">
                                        <h4>Admission Description</h4>
                                        {!! $admission->overview !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-body">
                                        {!! $admission->notice !!}

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="card-body">
                                        {!! $admission->attachment !!}
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

