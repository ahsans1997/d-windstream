@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="office">
                        {{-- <img width="100%" class="from-control" src="{{ $office->getFirstMediaUrl('offices') }}" alt=""> --}}

                        <div class="col-md-12">

                            <div class="course-info-list text-justify">
                                <div class="tab-info">
                                    <!-- Tab Nav -->
                                    <ul class="nav nav-pills">
                                        <li class="active">
                                            <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff" data-toggle="tab" href="#info"
                                                aria-expanded="true">
                                                INFO
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff" data-toggle="tab" href="#contact"
                                                aria-expanded="true">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-content-info pl-2 pr-2">

                                        <!-- Single Tab -->
                                        <div id="info" class="tab-pane fade active in show mb-3">
                                            <div class="info">
                                                <div class="card border-primary">
                                                  <div class="card-body">
                                                    <p>{!! $office->description !!}</p>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div id="contact" class="tab-pane fade mb-3">
                                            <div class="info">
                                                <div class="card border-primary">
                                                    <div class="card-body">
                                                        <h4>{{ $office->name }}</h4>
                                                        <p>{{ $office->address }}</p>
                                                        <p>Bangladesh</p>
                                                        <p>Contact Number : {{ $office->phone }}</p>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                        <!-- End Single Tab -->

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
    p{
        font-size: 20px;
    }
</style>
@endpush
