@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Create Office</h2>
                    </div>
                    <div class="form mt-3">
                        <form action="{{ route('offices.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label">Office Name</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Office Name" name="name">
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Description</label>
                                <textarea name="description" class="summernote form-control" rows="6"></textarea>
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="placeholderInput" placeholder="Phone Number" name="phone">
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Address</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Address" name="address">
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Office Image</label>
                                <input type="file" class="form-control" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>


                            <div class="card mt-4">
                                <div class="card-header">Meta tag</div>
                                <div class="card-body">
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">Meta Keyword Comma Separated</label>
                                        <input type="text" class="form-control" id="placeholderInput" placeholder="KeyWord" name="meta_keywords">
                                    </div>
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">Meta Description</label>
                                        <textarea name="meta_description" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
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


