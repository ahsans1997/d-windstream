@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Edit Research</h2>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="news-form mt-3">
                        <form action="{{ route('research.update', $research->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="placeholderInput" class="form-label">Title</label>
                                <input type="text" class="form-control" id="placeholderInput" value="{{ $research->title }}" name="title">
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Description</label>
                                <textarea name="description" class="summernote form-control" rows="6">{{ $research->description }}</textarea>
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Slgu</label>
                                <input type="text" name="slug" class="form-control" value="{{ $research->slug }}" id="">
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Department</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="department_id">
                                    <option value="">Open this select menu</option>
                                    @foreach ($departments as $department)
                                        <option {{ $research->department_id == $department->id ? 'selected' : '' }} value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Research Image</label>
                                <input type="file" class="form-control" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                            <div class="mt-2">
                                <label for="">Image</label>
                                <img class="img-fluid" style="width: 150px" src="{{ $research->getFirstMediaUrl('research') }}" alt="">
                            </div>

                            <div class="card mt-4">
                                <div class="card-header">Meta tag</div>
                                <div class="card-body">
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">Meta Keyword Comma(,) Separated</label>
                                        <input type="text" class="form-control" id="placeholderInput" value="{{ $research->meta_keywords }}" name="meta_keywords">
                                    </div>
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">Meta Description</label>
                                        <textarea name="meta_description" class="form-control" rows="3">{{ $research->meta_description }}</textarea>
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


