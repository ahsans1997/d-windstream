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
                        <form action="{{ route('admission.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label">Admission Title</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Admission Title" name="title">
                            </div>

                            {{-- <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Department</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="department_id">
                                    <option selected value="">Open this select menu</option>

                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Admission Type</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="admission_type">
                                    <option selected value="">Open this select menu</option>
                                    <option value="Undergradute">Undergradute Admission</option>
                                    <option value="Gradute">Gradute Admission</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Overview</label>
                                <textarea name="overview" class="summernote form-control" rows="6"></textarea>
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Notice</label>
                                <textarea name="notice" class="summernote form-control" rows="6"></textarea>
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Attachment</label>
                                <textarea name="attachment" class="summernote form-control" rows="6"></textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-success waves-effect waves-light mt-3 mb-5">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
