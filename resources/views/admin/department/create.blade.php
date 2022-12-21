@extends('layouts.app')

@section('create.department')
    active
@endsection

@section('title')
    Department
@endsection

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Create News</h2>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> Yey! Everything worked! </strong> A simple <b>Dismissible success Alert </b> — check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="news-form">
                        <form action="{{ route('department.store') }}" method="post">
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label">Department Name</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Department Name" name="name">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Contact number</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Department Name" name="contact_info">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Facebook Link</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Department Name" name="facebook">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Twiter Link</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Department Name" name="twiter">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Linkdin Link</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Department Name" name="linkdin">
                            </div>

                            <button type="submit" class="btn btn-outline-success waves-effect waves-light mt-3 mb-5">Success</button>
                        </form>
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->





@endsection


