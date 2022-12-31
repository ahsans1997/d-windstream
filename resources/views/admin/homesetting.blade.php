@extends('layouts.app')

@section('content')
@php
$research = json_decode($setting->home_research);
$about = json_decode($setting->home_about);
$section = $about;
@endphp



<div class="page-content">
    <div class="container-fluid">


        <div class="col-md-12">
            <div class="course-info-list text-justify">
            </div>

            <div class="course-info-list text-justify">
                <div class="tab-info">
                    <!-- Tab Nav -->

                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="banner-tab" data-bs-toggle="tab" data-bs-target="#banner"
                                type="button" role="tab" aria-controls="banner" aria-selected="false">Banner</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="home_research-tab" data-bs-toggle="tab"
                                data-bs-target="#home_research" type="button" role="tab" aria-controls="Home_research"
                                aria-selected="false">Research</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="home_about-tab" data-bs-toggle="tab"
                                data-bs-target="#home_about" type="button" role="tab" aria-controls="Home_about"
                                aria-selected="false">About</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- Single Tab -->

                        <div id="banner" class="tab-pane fade active show mt-4" role="tabpanel">
                            <div class="info title">
                                <div class="col-md-10 m-auto">
                                    <div class="card border-primary">
                                        <div class="card-header">Home Banner</div>
                                        <div class="card-body">
                                            <form action="{{ route('setting.update',1) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card border-dark mb-3">
                                                                <div class="card-header">Top Banner</div>
                                                                <div class="card-body">
                                                                    <div class="top_Banner">
                                                                        <img class="img-fluid" style="height: 0 auto;"
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->homebanner }}"
                                                                            alt="">

                                                                        <label class="mt-5">Change Top Banner</label>
                                                                        <input class="form-control" name="homebanner"
                                                                            type="file">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card border-dark mb-3">
                                                                <div class="card-header">Footer Banner</div>
                                                                <div class="card-body">
                                                                    <div class="footer_banner">
                                                                        <img class="img-fluid" style="height: 0 auto;"
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->homefooterbanner }}"
                                                                            alt="">

                                                                        <label class="mt-5">Change Footer Banner</label>
                                                                        <input class="form-control"
                                                                            name="homefooterbanner" type="file">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Single Tab -->


                        <div id="home_research" class="tab-pane fade mt-4" role="tabpanel"
                            aria-labelledby="home_research-tab">
                            <div class="info title">
                                <div class="col-md-10 m-auto">
                                    <div class="card border-primary">
                                        <div class="card-header">Research Update</div>
                                        <div class="card-body">
                                            <form action="{{ route('setting.update',1) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <label for="">Research Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ $research->title }}">
                                                <label for="">Research Description</label>
                                                <input type="text" name="research_description" class="form-control"
                                                    value="{{ $research->research_description }}">

                                                <div class="card border-dark mt-3" style="max-width: 600px;">
                                                    <div class="card-header">{{ $research->section_1->section_1_title }}
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="section_1">
                                                            <label for="">{{ $research->section_1->section_1_title }}
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                name="section_1_count"
                                                                value="{{ $research->section_1->section_1_count }}">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control"
                                                                name="section_1_title"
                                                                value="{{ $research->section_1->section_1_title }}">
                                                            <label for="">Description</label>
                                                            <textarea name="section_1_description" rows="4"
                                                                class="form-control">{{ $research->section_1->section_1_description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-dark mt-3" style="max-width: 600px;">
                                                    <div class="card-header">{{ $research->section_2->section_2_title }}
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="section_2">
                                                            <label for="">{{ $research->section_2->section_2_title }}
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                name="section_2_count"
                                                                value="{{ $research->section_2->section_2_count }}">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control"
                                                                name="section_2_title"
                                                                value="{{ $research->section_2->section_2_title }}">
                                                            <label for="">Description</label>
                                                            <textarea name="section_2_description" rows="4"
                                                                class="form-control">{{ $research->section_2->section_2_description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-dark mt-3" style="max-width: 600px;">
                                                    <div class="card-header">{{ $research->section_3->section_3_title }}
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="section_3">
                                                            <label for="">{{ $research->section_3->section_3_title }}
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                name="section_3_count"
                                                                value="{{ $research->section_3->section_3_count }}">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control"
                                                                name="section_3_title"
                                                                value="{{ $research->section_3->section_3_title }}">
                                                            <label for="">Description</label>
                                                            <textarea name="section_3_description" rows="4"
                                                                class="form-control">{{ $research->section_3->section_3_description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="home_about" class="tab-pane fade mt-4">
                            <div class="info title">
                                <div class="col-md-10 m-auto">
                                    <div class="card border-primary">
                                        <div class="card-header">Research Update</div>
                                        <div class="card-body">
                                            <form action="{{ route('setting.update',1) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <label for="">About Title</label>
                                                <input type="text" name="about_title" class="form-control"
                                                    value="{{ $about->about_title }}">
                                                <label for="">About Description</label>
                                                <input type="text" name="about_description" class="form-control"
                                                    value="{{ $about->about_description }}">

                                                <div class="card border-dark mt-3" style="max-width: 600px;">
                                                    <div class="card-header">
                                                        {{ $about->about_section_1->about_section_1_title }}</div>
                                                    <div class="card-body">
                                                        <div class="section_1">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control"
                                                                name="about_section_1_title"
                                                                value="{{ $about->about_section_1->about_section_1_title }}">
                                                            <label
                                                                for="">{{ $about->about_section_1->about_section_1_title }}
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                name="about_section_1_count"
                                                                value="{{ $about->about_section_1->about_section_1_count }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-dark mt-3" style="max-width: 600px;">
                                                    <div class="card-header">
                                                        {{ $about->about_section_2->about_section_2_title }}</div>
                                                    <div class="card-body">
                                                        <div class="section_2">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control"
                                                                name="about_section_2_title"
                                                                value="{{ $about->about_section_2->about_section_2_title }}">
                                                            <label
                                                                for="">{{ $about->about_section_2->about_section_2_title }}
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                name="about_section_2_count"
                                                                value="{{ $about->about_section_2->about_section_2_count }}">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-dark mt-3" style="max-width: 600px;">
                                                    <div class="card-header">
                                                        {{ $about->about_section_3->about_section_3_title }}</div>
                                                    <div class="card-body">
                                                        <div class="section_3">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control"
                                                                name="about_section_3_title"
                                                                value="{{ $about->about_section_3->about_section_3_title }}">
                                                            <label
                                                                for="">{{ $about->about_section_3->about_section_3_title }}
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                name="about_section_3_count"
                                                                value="{{ $about->about_section_3->about_section_3_count }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-dark mt-3" style="max-width: 600px;">
                                                    <div class="card-header">
                                                        {{ $about->about_section_4->about_section_4_title }}</div>
                                                    <div class="card-body">
                                                        <div class="section_4">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control"
                                                                name="about_section_4_title"
                                                                value="{{ $about->about_section_4->about_section_4_title }}">
                                                            <label
                                                                for="">{{ $about->about_section_4->about_section_4_title }}
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                name="about_section_4_count"
                                                                value="{{ $about->about_section_4->about_section_4_count }}">
                                                        </div>
                                                    </div>
                                                </div>


                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
