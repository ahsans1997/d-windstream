@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <div class="course-info-list text-justify">
                    <div class="tab-info">
                        <!-- Tab Nav -->

                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="historical-tab" data-bs-toggle="tab"
                                    data-bs-target="#historical" type="button" role="tab" aria-controls="historical"
                                    aria-selected="false">Historical Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision"
                                    type="button" role="tab" aria-controls="vision" aria-selected="false">Vision & Mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messagefromchairman-tab" data-bs-toggle="tab"
                                    data-bs-target="#messagefromchairman" type="button" role="tab" aria-controls="messagefromchairman"
                                    aria-selected="false">Message From Chairman</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messagefromprincipal-tab" data-bs-toggle="tab"
                                    data-bs-target="#messagefromprincipal" type="button" role="tab" aria-controls="messagefromprincipal"
                                    aria-selected="false">Message From Principal</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">

                            <!-- Single Tab -->

                            <div id="historical" class="tab-pane fade active show mt-4" role="tabpanel">
                                <div class="info title">
                                    <div class="col-md-10 m-auto">
                                        <div class="card border-primary">
                                            <div class="card-header">Historical Overview</div>
                                            <div class="card-body">
                                                <form action="{{ route('about.update',$abouts->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <textarea name="historicaloverview" id="" cols="30" class="form-control summernote" rows="10">{{ $abouts->historicaloverview }}</textarea>
                                                    <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Single Tab -->

                            <div id="vision" class="tab-pane fade mt-4" role="tabpanel">
                                <div class="info title">
                                    <div class="col-md-10 m-auto">
                                        <div class="card border-primary">
                                            <div class="card-header">Vision & Mission</div>
                                            <div class="card-body">
                                                <form action="{{ route('about.update',$abouts->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <label for="">Mission</label>
                                                    <textarea name="mission" id="" cols="30" class="form-control summernote" rows="10">{{ $abouts->mission }}</textarea>
                                                    <label for="" class="mt-4">Vision</label>
                                                    <textarea name="vision" id="" cols="30" class="form-control summernote" rows="10">{{ $abouts->vision }}</textarea>
                                                    <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Single Tab -->


                            <div id="messagefromchairman" class="tab-pane fade mt-4" role="tabpanel"
                                aria-labelledby="home_research-tab">
                                <div class="info title">
                                    <div class="col-md-10 m-auto">
                                        <div class="card border-primary">
                                            <div class="card-header">Message From Chairman</div>
                                            <div class="card-body">
                                                <form action="{{ route('about.update',$abouts->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <label for="">Chairman Name</label>
                                                    <input type="text" class="form-control" name="cname" value="{{ $abouts->cname }}">
                                                    <label for="" class="mt-3">Message</label>
                                                    <textarea name="messagefromchairman" class="form-control summernote" id="" cols="30" rows="10">{{ $abouts->messagefromchairman }}</textarea>
                                                    <label for="" class="mt-4">Image</label>
                                                    <img src="{{ $abouts->getFirstMediaUrl('chairman') }}" class="img-fluid mt-3 mb-3" alt="" width="300px">
                                                    <input type="file" name="cimage" class="form-control">
                                                    <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Single Tab -->

                            <div id="messagefromprincipal" class="tab-pane fade mt-4">
                                <div class="info title">
                                    <div class="col-md-10 m-auto">
                                        <div class="card border-primary">
                                            <div class="card-header">Message From Principal</div>
                                            <div class="card-body">
                                                <form action="{{ route('about.update',$abouts->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <label for="">Principal Name</label>
                                                    <input type="text" class="form-control" name="pname" value="{{ $abouts->pname }}">
                                                    <label for="" class="mt-3">Message</label>
                                                    <textarea name="messagefromprincipal" class="form-control summernote" id="" cols="30" rows="10">{{ $abouts->messagefromprincipal }}</textarea>
                                                    <label for="" class="mt-4">Image</label>
                                                    <img src="{{ $abouts->getFirstMediaUrl('principal') }}" class="img-fluid mt-3 mb-3" alt="" width="300px">
                                                    <input type="file" name="pimage" class="form-control">
                                                    <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Single Tab -->

                        </div>
                    </div>
                </div>

            </div> <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
</div>
@endsection
