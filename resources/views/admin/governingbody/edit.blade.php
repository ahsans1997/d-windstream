@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Edit Governing Body</h2>
                    </div>
                    <div class="form mt-3">
                        <form action="{{ route('governingbody.update',$governingbody->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="placeholderInput" class="form-label">Name</label>
                                <input type="text" class="form-control" id="placeholderInput" value="{{ $governingbody->name }}" name="name">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Designation</label>
                                <input type="text" name="designation" class="form-control" value="{{ $governingbody->designation }}"  id="">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Institute</label>
                                <input type="text" name="institute" class="form-control" value="{{ $governingbody->institute }}" id="">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Loaction</label>
                                <input type="text" name="location" class="form-control" value="{{ $governingbody->location }}" id="">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Position</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="position">
                                    <option value="">Select a Position</option>
                                    <option value="1" {{ ($governingbody->position == 1) ? 'selected' : '' }}>Chairman</option>
                                    <option value="2" {{ ($governingbody->position == 2) ? 'selected' : '' }}>Member</option>
                                    <option value="3" {{ ($governingbody->position == 3) ? 'selected' : '' }}>Secretary</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Serial</label>
                                <input type="number" name="serial" class="form-control" value="{{ $governingbody->serial }}" id="">
                            </div>


                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Governing Body Image</label>
                                <img src="{{ $governingbody->getFirstMediaUrl('governingbody') }}" class="img-fluid" alt="">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Governing Body Image</label>
                                <input type="file" class="form-control" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>


                            {{-- <div class="card mt-4">
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
                            </div> --}}

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


