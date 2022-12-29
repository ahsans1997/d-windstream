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
@endphp

<div class="page-content">
    <div class="container-fluid">


<div class="col-md-12">
    <div class="course-info-list text-justify">
    </div>

    <div class="course-info-list text-justify">
        <div class="tab-info">
            <!-- Tab Nav -->
            <ul class="nav nav-pills">
                <li class="active">
                    <a class="btn btn-warning rounded-0 m-1" data-toggle="tab" href="#logo" aria-expanded="true">
                        Logo
                    </a>
                </li>
                <li>
                    <a class="btn btn-warning rounded-0 m-1" data-toggle="tab" href="#banner"
                        aria-expanded="true">
                        Banner
                    </a>
                </li>
                <li>
                    <a class="btn btn-warning rounded-0 m-1" data-toggle="tab" href="#color" aria-expanded="false">
                        Color
                    </a>
                </li>
                <li>
                    <a class="btn btn-warning rounded-0 m-1" data-toggle="tab" href="#metatag"
                        aria-expanded="false">
                        Meta Tag
                    </a>
                </li>
                <li>
                    <a class="btn btn-warning rounded-0 m-1" data-toggle="tab" href="#home_research"
                        aria-expanded="false">
                        Research Info
                    </a>
                </li>
                <li>
                    <a class="btn btn-warning rounded-0 m-1" data-toggle="tab" href="#home_about"
                        aria-expanded="false">
                        About Info
                    </a>
                </li>
                <li>
                    <a class="btn btn-warning rounded-0 m-1" data-toggle="tab" href="#allbanner" aria-expanded="false">
                        All Banner
                    </a>
                </li>

                <li>
                    <a class="btn btn-warning rounded-0 m-1" data-toggle="tab" href="#contactInfo"
                        aria-expanded="false">
                        Contact
                    </a>
                </li>


            </ul>
            <div class="tab-content tab-content-info">

                <!-- Single Tab -->
                <div id="logo" class="tab-pane fade active in show  mt-5">
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


                <div id="banner" class="tab-pane fade">
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




                <div id="color" class="tab-pane fade">
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

                <div id="metatag" class="tab-pane fade">
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


                <div id="home_research" class="tab-pane fade mt-5">
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


                <div id="home_about" class="tab-pane fade">
                    <div class="info title">
                        <div class="col-md-10 m-auto">
                            <div class="card border-primary">
                                <div class="card-header">Research Update</div>
                                <div class="card-body">
                                    <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="">About Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ $about->title }}">
                                        <label for="">About Description</label>
                                        <input type="text" name="research_description" class="form-control" value="{{ $about->about_description }}">

                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $about->section_1->section_1_title }}</div>
                                            <div class="card-body">
                                                <div class="section_1">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="section_1_title" value="{{ $about->section_1->section_1_title }}">
                                                    <label for="">{{ $about->section_1->section_1_title }} Number</label>
                                                    <input type="text" class="form-control" name="section_1_count" value="{{ $about->section_1->section_1_count }}">
                                                </div>
                                            </div>
                                          </div>
                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $about->section_2->section_2_title }}</div>
                                            <div class="card-body">
                                                <div class="section_2">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="section_2_title" value="{{ $about->section_2->section_2_title }}">
                                                    <label for="">{{ $about->section_2->section_2_title }} Number</label>
                                                    <input type="text" class="form-control" name="section_2_count" value="{{ $about->section_2->section_2_count }}">

                                                </div>
                                            </div>
                                          </div>
                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $about->section_3->section_3_title }}</div>
                                            <div class="card-body">
                                                <div class="section_3">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="section_3_title" value="{{ $about->section_3->section_3_title }}">
                                                    <label for="">{{ $about->section_3->section_3_title }} Number</label>
                                                    <input type="text" class="form-control" name="section_3_count" value="{{ $about->section_3->section_3_count }}">
                                                   </div>
                                            </div>
                                        </div>
                                        <div class="card border-dark mt-3" style="max-width: 600px;">
                                            <div class="card-header">{{ $about->section_4->section_4_title }}</div>
                                            <div class="card-body">
                                                <div class="section_4">
                                                    <label for="">Title</label>
                                                    <input type="text" class="form-control" name="section_4_title" value="{{ $about->section_4->section_4_title }}">
                                                    <label for="">{{ $about->section_4->section_4_title }} Number</label>
                                                    <input type="text" class="form-control" name="section_4_count" value="{{ $about->section_4->section_4_count }}">
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




                <div id="allbanner" class="tab-pane fade">
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
                                                                <img class="img-fluid" style="height: 0 auto;"
                                                                    src="{{ asset('/') }}assets/images/{{ $setting->programbanner }}" alt="">


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
                                                                <img class="img-fluid" style="height: 0 auto;"
                                                                    src="{{ asset('/') }}assets/images/{{ $setting->newsbanner }}" alt="">

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
                                                                <img class="img-fluid" style="height: 0 auto;"
                                                                    src="{{ asset('/') }}assets/images/{{ $setting->eventbanner }}" alt="">

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
                                                                <img class="img-fluid" style="height: 0 auto;"
                                                                    src="{{ asset('/') }}assets/images/{{ $setting->departmentbanner }}" alt="">

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
                                                                <img class="img-fluid" style="height: 0 auto;"
                                                                    src="{{ asset('/') }}assets/images/{{ $setting->researchbanner }}" alt="">

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
                                                                <img class="img-fluid" style="height: 0 auto;"
                                                                    src="{{ asset('/') }}assets/images/{{ $setting->aboutbanner }}" alt="">

                                                                <input class="form-control" name="aboutbanner" type="file">
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
