@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row w-100">
                        <div class="col-3">
                            <!-- Tab navs -->
                            <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link text-left border" id="v-tabs-boys-tab" data-mdb-toggle="tab" href="#v-tabs-boys"
                                    role="tab" aria-controls="v-tabs-boys" aria-selected="true">Student Accommodation</a>
                                <a class="nav-link text-left active border" id="v-tabs-boys-tab" data-mdb-toggle="tab" href="#v-tabs-boys" style="padding-left: 50px"
                                    role="tab" aria-controls="v-tabs-boys" aria-selected="false">-Boys Hostel</a>
                                <a class="nav-link text-left border" id="v-tabs-girls-tab" data-mdb-toggle="tab" href="#v-tabs-girls" style="padding-left: 50px"
                                    role="tab" aria-controls="v-tabs-girls" aria-selected="false">-Girls Hostel</a>
                                <a class="nav-link text-left border" id="v-tabs-medical-tab" data-mdb-toggle="tab" href="#v-tabs-medical"
                                    role="tab" aria-controls="v-tabs-medical" aria-selected="false">Medical Center</a>
                                <a class="nav-link text-left border" id="v-tabs-library-tab" data-mdb-toggle="tab" href="#v-tabs-library"
                                    role="tab" aria-controls="v-tabs-library" aria-selected="false">NITER Library</a>
                                <a class="nav-link text-left border" id="v-tabs-cafe-tab" data-mdb-toggle="tab" href="#v-tabs-cafe"
                                    role="tab" aria-controls="v-tabs-cafe" aria-selected="false">Cafe / Canteen</a>
                                <a class="nav-link text-left border" id="v-tabs-gallery-tab" data-mdb-toggle="tab" href="#v-tabs-gallery"
                                    role="tab" aria-controls="v-tabs-gallery" aria-selected="false">Gallery</a>
                                <a class="nav-link text-left border" id="v-tabs-gallery-tab" data-mdb-toggle="tab" href="#v-tabs-gallery" style="padding-left: 50px"
                                    role="tab" aria-controls="v-tabs-gallery" aria-selected="false">-Photo Gallery</a>
                                <a class="nav-link text-left border" id="v-tabs-videogallery-tab" data-mdb-toggle="tab" href="#v-tabs-videogallery" style="padding-left: 50px"
                                    role="tab" aria-controls="v-tabs-videogallery" aria-selected="false">-Video Gallery</a>
                            </div>
                            <!-- Tab navs -->
                        </div>

                        <div class="col-9">
                            <!-- Tab content -->
                            <div class="tab-content" id="v-tabs-tabContent">
                                <div class="tab-pane fade show active" id="v-tabs-boys" role="tabpanel"
                                    aria-labelledby="v-tabs-boys-tab">
                                    <div class="card border-primary">
                                        <div class="card-header">Boys Hostel</div>
                                        <div class="card-body">
                                            <img class="img-fluid mb-5" src="{{ $resources->getFirstMediaUrl('boys') }}" alt="">
                                            <h4 style="font-weight: 700"><u>Description</u></h4>
                                            {!! $resources->boys !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-tabs-girls" role="tabpanel"
                                    aria-labelledby="v-tabs-girls-tab">
                                    <div class="card border-primary">
                                        <div class="card-header">Girls Hostel</div>
                                        <div class="card-body">
                                            <img class="img-fluid mb-5" src="{{ $resources->getFirstMediaUrl('girls') }}" alt="">
                                            <h4 style="font-weight: 700"><u>Description</u></h4>
                                            {!! $resources->girls !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-tabs-medical" role="tabpanel"
                                    aria-labelledby="v-tabs-medical-tab">
                                    <div class="card border-primary">
                                        <div class="card-header">Medical Center</div>
                                        <div class="card-body">
                                            <div class="card-body">
                                                <img class="img-fluid mb-5" src="{{ $resources->getFirstMediaUrl('medical') }}" alt="">
                                                <h4 style="font-weight: 700"><u>Description</u></h4>
                                                {!! $resources->medical !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-tabs-library" role="tabpanel"
                                    aria-labelledby="v-tabs-library-tab">
                                    <div class="card border-primary">
                                        <div class="card-header">NITER Library</div>
                                        <div class="card-body">
                                            <img class="img-fluid mb-5" src="{{ $resources->getFirstMediaUrl('library') }}" alt="">
                                            <h4 style="font-weight: 700"><u>Description</u></h4>
                                            {!! $resources->library !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-tabs-cafe" role="tabpanel"
                                    aria-labelledby="v-tabs-cafe-tab">
                                    <div class="card border-primary">
                                        <div class="card-header">Cafe / Canteen</div>
                                        <div class="card-body">
                                            <img class="img-fluid mb-5" src="{{ $resources->getFirstMediaUrl('cafe') }}" alt="">
                                            <h4 style="font-weight: 700"><u>Description</u></h4>
                                            {!! $resources->cafe !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-tabs-gallery" role="tabpanel"
                                    aria-labelledby="v-tabs-gallery-tab">
                                    <div class="card border-primary">
                                        <div class="card-header">Photo Gallery</div>
                                        <div class="card-body">
                                            {{-- <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <label for="">Phone</label>
                                                <input type="text" value="{{ $it->itphone }}" name="itphone" class="form-control">
                                                <label for="">Email</label>
                                                <input type="text" value="{{ $it->itemail }}" name="itemail" class="form-control">
                                                <button type="submit" class="mt-3" style="float: right">Submit</button>
                                            </form> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-tabs-videogallery" role="tabpanel"
                                    aria-labelledby="v-tabs-videogallery-tab">
                                    <div class="card border-primary">
                                        <div class="card-header">Video Gallery</div>
                                        <div class="card-body">
                                            {{-- <form action="{{ route('contact.update',$contact->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <label for="">Phone</label>
                                                <input type="text" value="{{ $crir->crirphone }}" name="crirphone" class="form-control">
                                                <label for="">Email</label>
                                                <input type="text" value="{{ $crir->criremail }}" name="criremail" class="form-control">
                                                <button type="submit" class="mt-3" style="float: right">Submit</button>
                                            </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
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
