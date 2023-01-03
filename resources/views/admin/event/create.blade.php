@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            {{-- <div class="col"> --}}

                <div class="header">
                    <h2>Create Event</h2>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form mt-3">
                    <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
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
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Venue</label>
                            <input type="text" class="form-control" id="placeholderInput" placeholder="Venue" name="venue">
                        </div>

                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Date & time</label>
                            <input type="datetime-local" class="form-control" id="placeholderInput" name="datetime">
                        </div>

                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Organization</label>
                            <input type="text" class="form-control" id="placeholderInput" placeholder="Organization" name="organization">
                        </div>

                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Price</label>
                            <input type="number" class="form-control" id="placeholderInput" placeholder="Price" name="price">
                        </div>

                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Registation Start</label>
                            <input type="date" class="form-control" id="placeholderInput" name="registration_start">
                        </div>

                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Registration End</label>
                            <input type="date" class="form-control" id="placeholderInput" name="registration_end">
                        </div>

                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Maximum Sit</label>
                            <input type="number" class="form-control" id="placeholderInput" placeholder="Maximum Sit" name="maximum_sit">
                        </div>

                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Event Image</label>
                            <input type="file" class="form-control" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>

                        <div class="card mt-4">
                            <div class="card-header">Meta tag</div>
                            <div class="card-body">
                                <div class="mt-2">
                                    <label for="placeholderInput" class="form-label">Meta Keyword Comma(,) Separated</label>
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

            {{-- </div> <!-- end col --> --}}
        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
