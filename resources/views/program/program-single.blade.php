@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container program-single">
            <div class="row">

                <div class="col-md-10">
                    <div class="">
                        <h2 class="mb-5"><strong>{{ $program->name }} ({{ $program->duration_in_month }} Semester)</strong></h2>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="pr-5 right-bar">
                                        <h3>FACULTY</h3>
                                        <P>{{ $program->department->name }}</P>
                                    </div>
                                    <div class="pl-5">
                                        <h3>DURATION</h3>
                                        <p><i class="fa fa-clock"></i> {{ $program->duration_in_month / 2 }} Years</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-5 tabbox">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item rounded-0" role="presentation">
                                    <button class="nav-link active rounded-0" id="home-tab" data-toggle="tab"
                                        data-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-0" id="profile-tab" data-toggle="tab"
                                        data-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Curriculum & Courses</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link rounded-0" id="contact-tab" data-toggle="tab"
                                        data-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">All Syllabus</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="card-body">
                                        <h4>Program Description</h4>
                                        {!! $program->description_list !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-body">
                                        <h2>List of Courses(Year/Semester)</h2>

                                        <div id="accordion">
                                            @foreach ($program->semister as $semister)
                                                <div class="card">

                                                    <div class="card-header" id="semister{{ $semister->id }}">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link" data-toggle="collapse"
                                                                data-target="#semisterCollapse{{ $semister->id }}"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                {{ $semister->name }}
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="semisterCollapse{{ $semister->id }}" class="collapse"
                                                        aria-labelledby="semister{{ $semister->id }}"
                                                        data-parent="#accordion">
                                                        <div class="card-body">
                                                            <ul>

                                                                @forelse($semister->subjects as $subject)
                                                                    <div class="title">
                                                                        <i class="fas fa-file"></i> {{ $subject->name }}
                                                                        Cr.
                                                                        <a data-toggle="modal"
                                                                            data-target="#subjects{{ $subject->id }}"
                                                                            href="#"><i class="fa fa-eye"
                                                                                aria-hidden="true"></i>Preview</a>

                                                                    </div>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade"
                                                                        id="subjects{{ $subject->id }}" tabindex="-1"
                                                                        role="dialog" aria-labelledby="myModalLabel">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header"
                                                                                    style="background: #1C4370">
                                                                                    <h4 class="modal-title"
                                                                                        id="myModalLabel"
                                                                                        style="color: white">Course Title:
                                                                                        {{ $subject->name }}
                                                                                    </h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>
                                                                                        Course Credit:
                                                                                        {{ $subject->credit }}
                                                                                    </p>
                                                                                    <br>
                                                                                    {!! $subject->description !!}
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-default"
                                                                                        data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                @empty
                                                                    <div class="title">
                                                                        No Courses Found.
                                                                    </div>
                                                                @endforelse


                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="card-body">
                                        <ul>
                                            @forelse($program->syllabus as $syllabus)
                                                <li><i class="fa fa-link"></i> <a href="{{ $syllabus->link }}">{{$syllabus->name}}</a></li>
                                            @empty
                                                <li>No Syllabus found</li>
                                            @endforelse
                                        </ul>
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
