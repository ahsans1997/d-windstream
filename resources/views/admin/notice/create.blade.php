@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Create Notice</h2>
                    </div>
                    <div class="form mt-3">
                        <form action="{{ route('notice.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label">Title</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Title" name="title">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Description</label>
                                <textarea name="description" class="summernote form-control" rows="6"></textarea>
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Department</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="department_id">
                                    <option selected value="">Open this select menu</option>
                                    <option value="1000">General Notice</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Notice Image</label>
                                <input type="file" class="form-control" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Notice File</label>
                                <input type="file" class="form-control" name="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
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


