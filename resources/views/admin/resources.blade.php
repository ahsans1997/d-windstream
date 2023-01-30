@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link text-left active border" id="v-pills-boys-tab" data-toggle="pill"
                            data-target="#v-pills-boys" type="button" role="tab" aria-controls="v-pills-boys"
                            aria-selected="true">Boys Hostel</button>
                        <button class="nav-link text-left border" id="v-pills-girls-tab" data-toggle="pill"
                            data-target="#v-pills-girls" type="button" role="tab" aria-controls="v-pills-girls"
                            aria-selected="false">Girls Hostel</button>
                        <button class="nav-link text-left border" id="v-pills-medical-tab" data-toggle="pill"
                            data-target="#v-pills-medical" type="button" role="tab" aria-controls="v-pills-medical"
                            aria-selected="false">Medical Center</button>
                        <button class="nav-link text-left border" id="v-pills-library-tab" data-toggle="pill"
                            data-target="#v-pills-library" type="button" role="tab" aria-controls="v-pills-library"
                            aria-selected="false">NITER Library</button>
                        <button class="nav-link text-left border" id="v-pills-cafe-tab" data-toggle="pill"
                            data-target="#v-pills-cafe" type="button" role="tab" aria-controls="v-pills-cafe"
                            aria-selected="false">Cafe / Canteen</button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-boys" role="tabpanel"
                            aria-labelledby="v-pills-boys-tab">
                            <div class="card border-primary">
                                <div class="card-header">Boys Hostel</div>
                                <div class="card-body">
                                    <form action="{{ route('resources.update', $resources->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label class="mt-4" for="">Image</label>
                                        <img src="{{ $resources->getFirstMediaUrl('boys') }}" class="img-fluid"
                                            alt="" style="width: 300px">
                                        <input type="file" class="form-control mt-4" name="boysimage">
                                        <label class="mt-4" for="">Description</label>
                                        <textarea name="boys" class="form-control summernote" rows="6">{{ $resources->boys }}</textarea>

                                        <button type="submit" class="btn btn-success mt-3"
                                            style="float: right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-girls" role="tabpanel" aria-labelledby="v-pills-girls-tab">
                            <div class="card border-primary">
                                <div class="card-header">Girls Hostel</div>
                                <div class="card-body">
                                    <form action="{{ route('resources.update', $resources->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label class="mt-4" for="">Image</label>
                                        <img src="{{ $resources->getFirstMediaUrl('girls') }}" class="img-fluid"
                                            alt="" style="width: 300px">
                                        <input type="file" class="form-control mt-4" name="girlsimage">
                                        <label class="mt-4" for="">Description</label>
                                        <textarea name="girls" class="form-control summernote" rows="6">{{ $resources->girls }}</textarea>

                                        <button type="submit" class="btn btn-success mt-3"
                                            style="float: right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-medical" role="tabpanel"
                            aria-labelledby="v-pills-medical-tab">
                            <div class="card border-primary">
                                <div class="card-header">Medical Center</div>
                                <div class="card-body">
                                    <form action="{{ route('resources.update', $resources->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label class="mt-4" for="">Image</label>
                                        <img src="{{ $resources->getFirstMediaUrl('medical') }}" class="img-fluid"
                                            alt="" style="width: 300px">
                                        <input type="file" class="form-control mt-4" name="medicalimage">
                                        <label class="mt-4" for="">Description</label>
                                        <textarea name="medical" class="form-control summernote" rows="6">{{ $resources->medical }}</textarea>

                                        <button type="submit" class="btn btn-success mt-3"
                                            style="float: right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-library" role="tabpanel"
                            aria-labelledby="v-pills-library-tab">
                            <div class="card border-primary">
                                <div class="card-header">NITER Library</div>
                                <div class="card-body">
                                    <form action="{{ route('resources.update', $resources->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label class="mt-4" for="">Image</label>
                                        <img src="{{ $resources->getFirstMediaUrl('library') }}" class="img-fluid"
                                            alt="" style="width: 300px">
                                        <input type="file" class="form-control mt-4" name="libraryimage">
                                        <label class="mt-4" for="">Description</label>
                                        <textarea name="library" class="form-control summernote" rows="6">{{ $resources->library }}</textarea>

                                        <button type="submit" class="btn btn-success mt-3"
                                            style="float: right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-cafe" role="tabpanel" aria-labelledby="v-pills-cafe-tab">
                            <div class="card border-primary">
                                <div class="card-header">Cafe / Canteen</div>
                                <div class="card-body">
                                    <form action="{{ route('resources.update', $resources->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label class="mt-4" for="">Image</label>
                                        <img src="{{ $resources->getFirstMediaUrl('cafe') }}" class="img-fluid"
                                            alt="" style="width: 300px">
                                        <input type="file" class="form-control mt-4" name="cafeimage">
                                        <label class="mt-4" for="">Description</label>
                                        <textarea name="cafe" class="form-control summernote" rows="6">{{ $resources->cafe }}</textarea>

                                        <button type="submit" class="btn btn-success mt-3"
                                            style="float: right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
@endpush
