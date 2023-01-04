@extends('layouts.app')

@section('content')

@php
    $portal = json_decode($setting->portal)
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
                            <button class="nav-link active" id="logo-tab" data-bs-toggle="tab" data-bs-target="#logo"
                                type="button" role="tab" aria-controls="logo" aria-selected="true">Logo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="logo-tab" data-bs-toggle="tab" data-bs-target="#organization"
                                type="button" role="tab" aria-controls="organization" aria-selected="true">Organization</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color"
                                type="button" role="tab" aria-controls="color" aria-selected="false">Color</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="metatag-tab" data-bs-toggle="tab" data-bs-target="#metatag"
                                type="button" role="tab" aria-controls="metatag" aria-selected="false">Meta Tag</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="allbanner-tab" data-bs-toggle="tab" data-bs-target="#allbanner"
                                type="button" role="tab" aria-controls="allbanner" aria-selected="false">All
                                Banner</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="portal-tab" data-bs-toggle="tab" data-bs-target="#portal"
                                type="button" role="tab" aria-controls="portal" aria-selected="false">Portal</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- Single Tab -->
                        <div class="tab-pane fade show active mt-4" id="logo" role="tabpanel"
                            aria-labelledby="logo-tab">
                            <div class="info title">
                                <div class="col-md-10 m-auto">
                                    <div class="card border-primary">
                                        <div class="card-header">Logo</div>
                                        <div class="card-body">
                                            <form action="{{ route('setting.update',1) }}" method="POST"
                                                enctype="multipart/form-data">
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
                                                                            src="{{ asset('/') }}assets/images/{{ $setting->web_logo }}"
                                                                            alt="">

                                                                        <label class="mt-5">Change Logo</label>
                                                                        <input class="form-control" name="web_logo"
                                                                            type="file">
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
                                                                            src="{{ asset('/') }}assets/images/{{ $setting->mobile_logo }}"
                                                                            alt="">

                                                                        <label class="mt-5">Change Logo</label>
                                                                        <input class="form-control" name="mobile_logo"
                                                                            type="file">
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

                        <div id="organization" class="tab-pane fade mt-4" role="tabpanel" aria-labelledby="organization-tab">
                            <div class="info title">
                                <div class="col-md-8 m-auto">
                                    <div class="card border-primary">
                                        <div class="card-header">Organization</div>
                                        <div class="card-body">
                                            <form action="{{ route('setting.update',1) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                    <label>Organization Name</label>
                                                    <input type="text" class="form-control" name="organization_name" value="{{ $setting->organization_name }}">
                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="color" class="tab-pane fade mt-4" role="tabpanel" aria-labelledby="color-tab">
                            <div class="info title">
                                <div class="col-md-10 m-auto">
                                    <div class="card border-primary">
                                        <div class="card-header">Logo</div>
                                        <div class="card-body">
                                            <form action="{{ route('setting.update',1) }}" method="POST"
                                                enctype="multipart/form-data">
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
                                                                        <input type="text"
                                                                            class="form-control colorpicker">
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
                                            <form action="{{ route('setting.update',1) }}" method="POST"
                                                enctype="multipart/form-data">
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
                                                                        <textarea name="meta_description" rows="4"
                                                                            class="form-control">{{ $setting->meta_description }}</textarea>
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
                                                                        <input type="text" class="form-control"
                                                                            name="meta_keyword"
                                                                            value="{{ $setting->meta_keyword }}">
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
                                                                        <textarea name="google_analytics" rows="4"
                                                                            class="form-control">{{ $setting->google_analytics }}</textarea>
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

                        <div id="portal" class="tab-pane fade mt-4">
                            <div class="info title">
                                <div class="col-md-10 m-auto">
                                    <div class="card border-primary">
                                        <div class="card-header">Poratl</div>
                                        <div class="card-body">
                                            <form action="{{ route('setting.update',1) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <label for="">Student Poartal Link</label>
                                                <input type="text" class="form-control" name="student_portal" value="{{ $portal->student_portal }}">
                                                <label class="mt-3" for="">Teacher Poartal Link</label>
                                                <input type="text" class="form-control" name="teacher_portal" value="{{ $portal->teacher_portal }}">
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

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card border-dark mb-3">
                                                                <div class="card-header">Change Program Banner</div>
                                                                <div class="card-body">
                                                                    <div class="programbanner">
                                                                        <img class="img-fluid mt-3" src="{{ asset('/') }}assets/images/banner/{{ $setting->programbanner }}" alt="">
                                                                        <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <input class="form-control mt-3" name="programbanner" type="file">
                                                                            <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                                        </form>
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
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->newsbanner }}"
                                                                            alt="">
                                                                            <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input class="form-control mt-3" name="newsbanner"
                                                                            type="file">
                                                                            <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                                            </form>

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
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->eventbanner }}"
                                                                            alt="">
                                                                            <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input class="form-control mt-3" name="eventbanner"
                                                                                    type="file">
                                                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                                            </form>
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
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->departmentbanner }}"
                                                                            alt="">
                                                                            <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input class="form-control mt-3"
                                                                                    name="departmentbanner" type="file">
                                                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                                            </form>
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
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->researchbanner }}"
                                                                            alt="">
                                                                            <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input class="form-control mt-3"
                                                                                    name="researchbanner" type="file">
                                                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                                            </form>
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
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->aboutbanner }}"
                                                                            alt="">
                                                                            <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input class="form-control mt-3" name="aboutbanner"
                                                                                    type="file">
                                                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                                            </form>
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
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->contactbanner }}"
                                                                            alt="">
                                                                            <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input class="form-control mt-3" name="contactbanner"
                                                                                    type="file">
                                                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                                            </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card border-dark mb-3">
                                                                <div class="card-header">Change Faculty Member Banner
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="contactbanner">
                                                                        <img class="img-fluid mt-3"
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->facultymemberbanner }}"
                                                                            alt="">
                                                                            <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input class="form-control mt-3"
                                                                                    name="facultymemberbanner" type="file">
                                                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                                            </form>
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
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->noticebanner }}"
                                                                            alt="">
                                                                            <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input class="form-control mt-3" name="noticebanner"
                                                                                    type="file">
                                                                                <button class="btn btn-info mt-3" style="float: right">Submit</button>
                                                                            </form>
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
                                                                            src="{{ asset('/') }}assets/images/banner/{{ $setting->defaultbanner }}"
                                                                            alt="">
                                                                            <form action="{{ route('setting.update',1) }}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <input class="form-control mt-3" name="defaultbanner"
                                                                                    type="file">
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
<script>
    $(document).ready(function () {
        $('.colorpicker').colorpicker()
    });

</script>
@endpush
