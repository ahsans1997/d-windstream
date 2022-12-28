@extends('layouts.app')

@section('event.edit')
    active
@endsection

@section('event.show')
    show
@endsection

@section('title')
    Event
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="header">
                    <h2>Create Event</h2>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form mt-3">
                    <form action="{{ route('event.update',$event->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div>
                            <label for="placeholderInput" class="form-label">Title</label>
                            <input type="text" class="form-control" id="placeholderInput" value="{{ $event->title }}" name="title">
                        </div>
                        @error('title')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="6">{{ $event->description }}</textarea>
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
                        <div>
                            <label for="placeholderInput" class="form-label">Venue</label>
                            <input type="text" class="form-control" id="placeholderInput" value="{{ $event->venue }}" name="venue">
                        </div>
                        @error('venue')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Date & time</label>
                            <input type="datetime-local" class="form-control" id="placeholderInput" value="{{ $event->datetime }}" name="datetime">
                        </div>
                        @error('datetime')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div>
                            <label for="placeholderInput" class="form-label">Organization</label>
                            <input type="text" class="form-control" id="placeholderInput" value="{{ $event->organization }}" name="organization">
                        </div>
                        @error('organization')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div>
                            <label for="placeholderInput" class="form-label">Price</label>
                            <input type="number" class="form-control" id="placeholderInput" value="{{ $event->price }}" name="price">
                        </div>
                        @error('price')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div>
                            <label for="placeholderInput" class="form-label">Registation Start</label>
                            <input type="date" class="form-control" id="placeholderInput" value="{{ $event->registration_start }}" name="registration_start">
                        </div>
                        @error('registration_start')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div>
                            <label for="placeholderInput" class="form-label">Registration End</label>
                            <input type="date" class="form-control" id="placeholderInput" value="{{ $event->registration_end }}" name="registration_end">
                        </div>
                        @error('registration_end')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div>
                            <label for="placeholderInput" class="form-label">Maximum Sit</label>
                            <input type="number" class="form-control" id="placeholderInput" value="{{ $event->maximum_sit }}" name="maximum_sit">
                        </div>
                        @error('registration_end')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mt-2">
                            <label for="placeholderInput" class="form-label">Event Image</label>
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
