@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="header">
                    <h2>Create Lab Facility</h2>
                </div>

                <div class="form">
                    <form action="{{ route('labfacility.update',$labfacility->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="placeholderInput" class="form-label">Lab Facility Title</label>
                            <input type="text" class="form-control" id="placeholderInput" value="{{ $labfacility->title }}" name="title">
                        </div>
                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Description</label>
                            <textarea name="description" class="summernote form-control" rows="6">{{ $labfacility->description }}</textarea>
                        </div>
                        <div class="mt-2">
                            <label>Department</label>
                            <select class="form-select mb-3" aria-label=".form-select-lg example" name="department_id">
                                <option  value="">Open this select menu</option>
                                @foreach ($departments as $department)
                                    <option {{ ($labfacility->department_id == $department->id) ? 'selected' : '' }} value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Image</label>
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
