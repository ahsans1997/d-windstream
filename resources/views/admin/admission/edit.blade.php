@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="header">
                        <h2>Create Admission</h2>
                    </div>
                    <div class="form">
                        <form action="{{ route('admission.update',$admission->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="placeholderInput" class="form-label">Admission Title</label>
                                <input type="text" class="form-control" id="placeholderInput" value="{{ $admission->title }}" name="title">
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Department</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="department_id">
                                    <option value="">Open this select menu</option>
                                    @foreach ($departments as $department)
                                        <option {{ ($admission->department_id == $department->id ) ? 'selected' : '' }} value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Admission Type</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="admission_type">
                                    <option value="">Open this select menu</option>
                                    <option {{ ($admission->admission_type == "undergradute") ? 'selected' : '' }} value="undergradute">Undergradute Admission</option>
                                    <option {{ ($admission->admission_type == "gradute") ? 'selected' : '' }} value="gradute">Gradute Admission</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Overview</label>
                                <textarea name="overview" class="summernote form-control" rows="6">{{ $admission->overview }}</textarea>
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Notice</label>
                                <textarea name="notice" class="summernote form-control" rows="6">{{ $admission->notice }}</textarea>
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Attachment</label>
                                <textarea name="attachment" class="summernote form-control" rows="6">{{ $admission->attachment }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-success waves-effect waves-light mt-3 mb-5">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
