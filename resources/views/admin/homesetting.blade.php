@extends('layouts.app')

@section('content')
@php
$research = json_decode($setting->home_research);
$about = json_decode($setting->home_about);
$part1 = json_decode($homesection->part1);
$part2 = json_decode($homesection->part2);
$part3 = json_decode($homesection->part3);
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
                            <button class="nav-link active" id="banner-tab" data-bs-toggle="tab"
                                data-bs-target="#banner" type="button" role="tab" aria-controls="banner"
                                aria-selected="false">Banner</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="section_1-tab" data-bs-toggle="tab" data-bs-target="#section_1"
                                type="button" role="tab" aria-controls="section_1" aria-selected="false">Section
                                1</button>
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

                        <div id="section_1" class="tab-pane fade mt-4" role="tabpanel">
                            <div class="info title">
                                <div class="col-md-10 m-auto">
                                    <div class="card border-primary">
                                        <div class="card-header">Section 1 Update</div>
                                        <div class="card-body">
                                            <div class="course-info-list text-justify">
                                                <div class="tab-info">
                                                    <!-- Tab Nav -->

                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="title-tab"
                                                                data-bs-toggle="tab" data-bs-target="#title"
                                                                type="button" role="tab" aria-controls="title"
                                                                aria-selected="false">Title</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="part1-tab" data-bs-toggle="tab"
                                                                data-bs-target="#part1" type="button" role="tab"
                                                                aria-controls="part1" aria-selected="false">Part
                                                                1</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="part2-tab" data-bs-toggle="tab"
                                                                data-bs-target="#part2" type="button" role="tab"
                                                                aria-controls="part2" aria-selected="false">Part
                                                                2</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="part3-tab" data-bs-toggle="tab"
                                                                data-bs-target="#part3" type="button" role="tab"
                                                                aria-controls="part3" aria-selected="false">Part
                                                                3</button>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content" id="myTabContent">

                                                        <!-- Single Tab -->



                                                        <!-- End Single Tab -->

                                                        <div id="title" class="tab-pane fade active show mt-4"
                                                            role="tabpanel">
                                                            <div class="info title">
                                                                <div class="col-md-10 m-auto">
                                                                    <div class="card border-primary">
                                                                        <div class="card-header">Title</div>
                                                                        <div class="card-body">

                                                                            <form
                                                                                action="{{ route('setting.section1',1) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <label for="">Title</label>
                                                                                <input type="text"
                                                                                    name="section_1_title"
                                                                                    class="form-control"
                                                                                    value="{{ $homesection->section_1_title }}">
                                                                                <label for="">section 1
                                                                                    Description</label>
                                                                                <input type="text"
                                                                                    name="section_1_description"
                                                                                    class="form-control"
                                                                                    value="{{ $homesection->section_1_description }}">
                                                                                <button class="btn btn-info mt-3"
                                                                                    style="float: right">Submit</button>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="part1" class="tab-pane fade mt-4" role="tabpanel">
                                                            <div class="info title">
                                                                <div class="col-md-10 m-auto">
                                                                    <div class="card border-primary">
                                                                        <div class="card-header">
                                                                            {{ $part1->part1_title }}</div>
                                                                        <div class="card-body">
                                                                            <form
                                                                                action="{{ route('setting.section1',1) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="section_1">
                                                                                    <img class="img-fluid"
                                                                                        src="{{ asset('/') }}assets/images/section_1/{{ $homesection->part1_image }}"
                                                                                        alt="">
                                                                                    <input type="file"
                                                                                        class="form-control mt-2"
                                                                                        name="part1_image">
                                                                                    <label for="">Title</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="part1_title"
                                                                                        value="{{ $part1->part1_title }}">
                                                                                    <label for="">Description</label>
                                                                                    <textarea name="part1_description"
                                                                                        class="form-control"
                                                                                        rows="5">{{ $part1->part1_description }}</textarea>
                                                                                    <label for="">Link</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="part1_link_name"
                                                                                        value="{{ $part1->part1_link_name }}">
                                                                                    <label for="">Link</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="part1_link"
                                                                                        value="{{ $part1->part1_link }}">
                                                                                    <button
                                                                                        class="btn btn-info mt-3 mb-2"
                                                                                        style="float: right">Submit</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="part2" class="tab-pane fade mt-4" role="tabpanel">
                                                            <div class="info title">
                                                                <div class="col-md-10 m-auto">
                                                                    <div class="card border-primary">
                                                                        <div class="card-header">
                                                                            {{ $part2->part2_title }}</div>
                                                                        <div class="card-body">
                                                                            <form
                                                                                action="{{ route('setting.section1',1) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')

                                                                                <div class="section_1">
                                                                                    <img class="img-fluid"
                                                                                        src="{{ asset('/') }}assets/images/section_1/{{ $homesection->part2_image }}"
                                                                                        alt="">
                                                                                    <input type="file"
                                                                                        class="form-control mt-2"
                                                                                        name="part2_image">
                                                                                    <label for="">Title</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="part2_title"
                                                                                        value="{{ $part2->part2_title }}">
                                                                                    <label for="">Description</label>
                                                                                    <textarea name="part2_description"
                                                                                        class="form-control"
                                                                                        rows="5">{{ $part2->part2_description }}</textarea>
                                                                                    <label for="">Link</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="part2_link_name"
                                                                                        value="{{ $part2->part2_link_name }}">
                                                                                    <label for="">Link</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="part2_link"
                                                                                        value="{{ $part2->part2_link }}">
                                                                                    <button
                                                                                        class="btn btn-info mt-3 mb-2"
                                                                                        style="float: right">Submit</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="part3" class="tab-pane fade mt-4" role="tabpanel">
                                                            <div class="info title">
                                                                <div class="col-md-10 m-auto">
                                                                    <div class="card border-primary">
                                                                        <div class="card-header">
                                                                            {{ $part3->part3_title }}</div>
                                                                        <div class="card-body">
                                                                            <form
                                                                                action="{{ route('setting.section1',1) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')

                                                                                <div class="section_1">
                                                                                    <img class="img-fluid"
                                                                                        src="{{ asset('/') }}assets/images/section_1/{{ $homesection->part3_image }}"
                                                                                        alt="">
                                                                                    <input type="file"
                                                                                        class="form-control mt-2"
                                                                                        name="part3_image">
                                                                                    <label for="">Title</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="part3_title"
                                                                                        value="{{ $part3->part3_title }}">
                                                                                    <label for="">Description</label>
                                                                                    <textarea name="part3_description"
                                                                                        class="form-control"
                                                                                        rows="5">{{ $part3->part3_description }}</textarea>
                                                                                    <label for="">Link</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="part3_link_name"
                                                                                        value="{{ $part3->part3_link_name }}">
                                                                                    <label for="">Link</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="part3_link"
                                                                                        value="{{ $part3->part3_link }}">
                                                                                    <button
                                                                                        class="btn btn-info mt-3 mb-2"
                                                                                        style="float: right">Submit</button>
                                                                                </div>
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
