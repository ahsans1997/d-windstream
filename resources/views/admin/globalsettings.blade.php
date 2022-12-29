@extends('layouts.app')

@section('settings')
active
@endsection

@section('title')
Research
@endsection

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
                  <button class="nav-link active" id="logo-tab" data-bs-toggle="tab" data-bs-target="#logo" type="button" role="tab" aria-controls="logo" aria-selected="true">Logo</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="banner-tab" data-bs-toggle="tab" data-bs-target="#banner" type="button" role="tab" aria-controls="banner" aria-selected="false">Banner</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color" type="button" role="tab" aria-controls="color" aria-selected="false">Color</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="metatag-tab" data-bs-toggle="tab" data-bs-target="#metatag" type="button" role="tab" aria-controls="metatag" aria-selected="false">Meta Tag</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="home_research-tab" data-bs-toggle="tab" data-bs-target="#home_research" type="button" role="tab" aria-controls="Home_research" aria-selected="false">Research</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="home_about-tab" data-bs-toggle="tab" data-bs-target="#home_about" type="button" role="tab" aria-controls="Home_about" aria-selected="false">About</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="allbanner-tab" data-bs-toggle="tab" data-bs-target="#allbanner" type="button" role="tab" aria-controls="allbanner" aria-selected="false">All Banner</button>
                </li>
              </ul>

            <div class="tab-content" id="myTabContent">

                <!-- Single Tab -->
                <div class="tab-pane fade show active mt-4" id="logo" role="tabpanel" aria-labelledby="logo-tab">
                    <div class="info title">
                        <div class="col-md-10 m-auto">
                            <div class="card border-primary">
                                <div class="card-header">Mobile Logo</div>
                                <div class="card-body">
                                    <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Web Logo</div>
                                                        <div class="card-body">
                                                            <div class="web_logo">
                                                                <img class="img-fluid" style="height: 0 auto;"
                                                                    src="{{ asset('/') }}assets/images/{{ $setting->web_logo }}" alt="">

                                                                <label class="mt-5">Change Logo</label>
                                                                <input class="form-control" name="web_logo" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Mobile Logo</div>
                                                        <div class="card-body">
                                                            <div class="mobile_logo">
                                                                <img class="img-fluid" style="height: 0 auto;"
                                                                    src="{{ asset('/') }}assets/images/{{ $setting->mobile_logo }}" alt="">

                                                                <label class="mt-5">Change Logo</label>
                                                                <input class="form-control" name="mobile_logo" type="file">
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


                <div id="banner" class="tab-pane fade mt-4" role="tabpanel" aria-labelledby="banner-tab">
                    <div class="info title">
                        <div class="col-md-10 m-auto">
                            <div class="card border-primary">
                                <div class="card-header">Home Banner</div>
                                <div class="card-body">
                                    <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
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
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->homebanner }}" alt="">

                                                                <label class="mt-5">Change Top Banner</label>
                                                                <input class="form-control" name="homebanner" type="file">
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
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->homefooterbanner }}" alt="">

                                                                <label class="mt-5">Change Footer Banner</label>
                                                                <input class="form-control" name="homefooterbanner" type="file">
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




                <div id="color" class="tab-pane fade mt-4" role="tabpanel" aria-labelledby="color-tab">
                    <div class="info title">
                        <div class="col-md-10 m-auto">
                            <div class="card border-primary">
                                <div class="card-header">Logo</div>
                                <div class="card-body">
                                    <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Header Color</div>
                                                        <div class="card-body">
                                                            <div class="header_color">
                                                                <label>Color picker:</label>
                                                                <input type="text" class="form-control my-colorpicker1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Footer Color</div>
                                                        <div class="card-body">
                                                            <div class="web_logo">

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

                <div id="metatag" class="tab-pane fade mt-4" role="tabpanel" aria-labelledby="metatag-tab">
                    <div class="info title">
                        <div class="col-md-10 m-auto">
                            <div class="card border-primary">
                                <div class="card-header">Logo</div>
                                <div class="card-body">
                                    <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Meta Description</div>
                                                        <div class="card-body">
                                                            <div class="meta_description">
                                                                <label>Change Meta Description</label>
                                                                <textarea name="meta_description" rows="4" class="form-control">{{ $setting->meta_description }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Meta Keyword</div>
                                                        <div class="card-body">
                                                            <div class="meta_keyword">
                                                                <label>Change Meta Keyword</label>
                                                                <input type="text" class="form-control" name="meta_keyword" value="{{ $setting->meta_keyword }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Google Analytics</div>
                                                        <div class="card-body">
                                                            <div class="google_analytics">
                                                                <label>Change Google Analytics</label>
                                                                <textarea name="google_analytics" rows="4" class="form-control">{{ $setting->google_analytics }}</textarea>
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


                <div id="home_research" class="tab-pane fade mt-4" role="tabpanel" aria-labelledby="home_research-tab">
                    <div class="info title">
                        <div class="col-md-10 m-auto">
                            <div class="card border-primary">
                                <div class="card-header">Research Update</div>
                                <div class="card-body">
                                    <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="">Research Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ $research->title }}">
                                        <label for="">Research Description</label>
                                        <input type="text" name="research_description" class="form-control" value="{{ $research->research_description }}">

                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $research->section_1->section_1_title }}</div>
                                            <div class="card-body">
                                                <div class="section_1">
                                                    <label for="">{{ $research->section_1->section_1_title }} Number</label>
                                                    <input type="text" class="form-control" name="section_1_count" value="{{ $research->section_1->section_1_count }}">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="section_1_title" value="{{ $research->section_1->section_1_title }}">
                                                    <label for="">Description</label>
                                                    <textarea name="section_1_description"  rows="4" class="form-control">{{ $research->section_1->section_1_description }}</textarea>
                                                </div>
                                            </div>
                                          </div>
                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $research->section_2->section_2_title }}</div>
                                            <div class="card-body">
                                                <div class="section_2">
                                                    <label for="">{{ $research->section_2->section_2_title }} Number</label>
                                                    <input type="text" class="form-control" name="section_2_count" value="{{ $research->section_2->section_2_count }}">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="section_2_title" value="{{ $research->section_2->section_2_title }}">
                                                    <label for="">Description</label>
                                                    <textarea name="section_2_description"  rows="4" class="form-control">{{ $research->section_2->section_2_description }}</textarea>
                                                </div>
                                            </div>
                                          </div>
                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $research->section_3->section_3_title }}</div>
                                            <div class="card-body">
                                                <div class="section_3">
                                                    <label for="">{{ $research->section_3->section_3_title }} Number</label>
                                                    <input type="text" class="form-control" name="section_3_count" value="{{ $research->section_3->section_3_count }}">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="section_3_title" value="{{ $research->section_3->section_3_title }}">
                                                    <label for="">Description</label>
                                                    <textarea name="section_3_description"  rows="4" class="form-control">{{ $research->section_3->section_3_description }}</textarea>
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
                                    <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="">About Title</label>
                                        <input type="text" name="about_title" class="form-control" value="{{ $about->about_title }}">
                                        <label for="">About Description</label>
                                        <input type="text" name="about_description" class="form-control" value="{{ $about->about_description }}">

                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $about->about_section_1->about_section_1_title }}</div>
                                            <div class="card-body">
                                                <div class="section_1">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="about_section_1_title" value="{{ $about->about_section_1->about_section_1_title }}">
                                                    <label for="">{{ $about->about_section_1->about_section_1_title }} Number</label>
                                                    <input type="text" class="form-control" name="about_section_1_count" value="{{ $about->about_section_1->about_section_1_count }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $about->about_section_2->about_section_2_title }}</div>
                                            <div class="card-body">
                                                <div class="section_2">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="about_section_2_title" value="{{ $about->about_section_2->about_section_2_title }}">
                                                    <label for="">{{ $about->about_section_2->about_section_2_title }} Number</label>
                                                    <input type="text" class="form-control" name="about_section_2_count" value="{{ $about->about_section_2->about_section_2_count }}">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $about->about_section_3->about_section_3_title }}</div>
                                            <div class="card-body">
                                                <div class="section_3">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="about_section_3_title" value="{{ $about->about_section_3->about_section_3_title }}">
                                                    <label for="">{{ $about->about_section_3->about_section_3_title }} Number</label>
                                                    <input type="text" class="form-control" name="about_section_3_count" value="{{ $about->about_section_3->about_section_3_count }}">
                                                   </div>
                                            </div>
                                        </div>
                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $about->about_section_4->about_section_4_title }}</div>
                                            <div class="card-body">
                                                <div class="section_4">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="about_section_4_title" value="{{ $about->about_section_4->about_section_4_title }}">
                                                    <label for="">{{ $about->about_section_4->about_section_4_title }} Number</label>
                                                    <input type="text" class="form-control" name="about_section_4_count" value="{{ $about->about_section_4->about_section_4_count }}">
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




                <div id="allbanner" class="tab-pane fade mt-4">
                    <div class="info title">
                        <div class="col-md-10 m-auto">
                            <div class="card border-primary">
                                <div class="card-header">Change Banner</div>
                                <div class="card-body">
                                    <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change Program Banner</div>
                                                        <div class="card-body">
                                                            <div class="programbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->programbanner }}" alt="">


                                                                <input class="form-control" name="programbanner" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change NEWS Banner</div>
                                                        <div class="card-body">
                                                            <div class="newsbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->newsbanner }}" alt="">

                                                                <input class="form-control" name="newsbanner" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change Event Banner</div>
                                                        <div class="card-body">
                                                            <div class="eventbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->eventbanner }}" alt="">

                                                                <input class="form-control" name="eventbanner" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change Department Banner</div>
                                                        <div class="card-body">
                                                            <div class="departmentbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->departmentbanner }}" alt="">

                                                                <input class="form-control" name="departmentbanner" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change Research Banner</div>
                                                        <div class="card-body">
                                                            <div class="researchbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->researchbanner }}" alt="">

                                                                <input class="form-control" name="researchbanner" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change About Banner</div>
                                                        <div class="card-body">
                                                            <div class="aboutbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->aboutbanner }}" alt="">

                                                                <input class="form-control" name="aboutbanner" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change Contact Banner</div>
                                                        <div class="card-body">
                                                            <div class="contactbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->contactbanner }}" alt="">

                                                                <input class="form-control" name="contactbanner" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change Faculty Member Banner</div>
                                                        <div class="card-body">
                                                            <div class="contactbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->facultymemberbanner }}" alt="">

                                                                <input class="form-control" name="facultymemberbanner" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change Notice Banner</div>
                                                        <div class="card-body">
                                                            <div class="contactbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->noticebanner }}" alt="">

                                                                <input class="form-control" name="noticebanner" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-dark mb-3">
                                                        <div class="card-header">Change Default Banner</div>
                                                        <div class="card-body">
                                                            <div class="contactbanner">
                                                                <img class="img-fluid mt-3"
                                                                    src="{{ asset('/') }}assets/images/banner/{{ $setting->defaultbanner }}" alt="">

                                                                <input class="form-control" name="defaultbanner" type="file">
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





                <div id="contactInfo" class="tab-pane fade">
                    <div class="info title">
                        <div class="col-lg-10 col-md-9 col-sm-6 col-xs-12">
                            <div class="bold font-size-18px">Dr. Sejuti Rahman</div>
                            <div style="font-size:13px;">
                                Assistant Professor &amp; Chairperson
                            </div>
                            <div style="font-size:13px;">
                                Department of Robotics and Mechatronics Engineering
                            </div>
                            <div style="font-size:13px;">
                                Faculty of Engineering and Technology
                            </div>
                            <div style="font-size:13px;">
                                Email: sejuti@gmail.com </div>
                            <div style="font-size:13px;">
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
