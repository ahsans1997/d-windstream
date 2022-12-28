@extends('layouts.app')

@section('edit.department')
    active
@endsection

@section('department.show')
    show
@endsection

@section('title')
    Department
@endsection

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Edit Department</h2>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="form">
                        <form action="{{ route('department.update',$department->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="placeholderInput" class="form-label">Department Name</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Department Name" name="name" value="{{ $department->name }}">
                            </div>
                            @error('name')
                                <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="6">{{ $department->description }}</textarea>
                            </div>
                            @error('description')
                                <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Contact number</label>
                                <input type="number" class="form-control" id="placeholderInput" placeholder="Contact Number" name="contact_info" value="{{ $department->contact_info }}">
                            </div>
                            @error('contact_info')
                                <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Facebook Link</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Facebook" name="facebook" value="@php
                                    $social_link = $department->social_link;
                                    $facebook = json_decode($social_link);
                                    echo $facebook->facebook;
                                @endphp">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Twiter Link</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Twiter" name="twiter" value="@php
                                    $social_link = $department->social_link;
                                    $twiter = json_decode($social_link);
                                    echo $twiter->twiter;
                                @endphp">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Linkdin Link</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Linkdin" name="linkdin" value="@php
                                    $social_link = $department->social_link;
                                    $linkdin = json_decode($social_link);
                                    echo $linkdin->linkdin;
                                @endphp">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Department Image</label>
                                <input type="file" class="form-control" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>

                            <button type="submit" class="btn btn-outline-success waves-effect waves-light mt-3 mb-5">Submit</button>
                        </form>
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->





@endsection


