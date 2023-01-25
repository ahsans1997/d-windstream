@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Create Department</h2>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif



                    <div class="form">
                        <form action="{{ route('department.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label">Department Name</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Department Name" name="name">
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Description</label>
                                <textarea name="description" class="summernote form-control" rows="6"></textarea>
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Contact number</label>
                                <input type="number" class="form-control" id="placeholderInput" placeholder="Contact Number" name="contact_info">
                            </div>
                            
                            {{-- <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Facebook Link</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Facebook" name="facebook">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Twiter Link</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Twiter" name="twiter">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Linkdin Link</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Linkdin" name="linkdin">
                            </div> --}}
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


