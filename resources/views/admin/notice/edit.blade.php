@extends('layouts.app')

@section('notice.create')
    active
@endsection

@section('notice.show')
    show
@endsection

@section('title')
    Notice
@endsection

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Edit Notice</h2>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="form mt-3">
                        <form action="{{ route('notice.update',$notice->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="placeholderInput" class="form-label">Title</label>
                                <input type="text" class="form-control" id="placeholderInput" value="{{ $notice->title }}" name="title">
                            </div>
                            @error('title')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="6">{{ $notice->description }}</textarea>
                            </div>
                            @error('description')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Department</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="department_id">
                                    <option selected value="">Open this select menu</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('department_id')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Meta Keyword Comma Separated</label>
                                <input type="text" class="form-control" id="placeholderInput" value="{{ $notice->meta_keywords }}" name="meta_keywords">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="3">{{ $notice->meta_description }}</textarea>
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Notice Image</label>
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


