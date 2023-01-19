@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Edit FAQ</h2>
                    </div>
                    <div class="form mt-3">
                        <form action="{{ route('faq.update',$faq->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="placeholderInput" class="form-label">Question</label>
                                <input type="text" class="form-control" id="placeholderInput" value="{{ $faq->question }}" name="question">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Answer</label>
                                <textarea name="answer" class="summernote form-control" rows="6">{{ $faq->answer }}</textarea>
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Section</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="section">
                                    <option  value="">Open this select section</option>
                                    <option {{ ($faq->section == 1) ? 'selected' : '' }} value="1">General</option>
                                    <option {{ ($faq->section == 2) ? 'selected' : '' }} value="2">Undergraduate</option>
                                    <option {{ ($faq->section == 3) ? 'selected' : '' }} value="3">Postgraduate</option>
                                    <option {{ ($faq->section == 4) ? 'selected' : '' }} value="4">Certificates & Documents Related</option>
                                    <option {{ ($faq->section == 5) ? 'selected' : '' }} value="5">Library related</option>
                                </select>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header">Meta tag</div>
                                <div class="card-body">
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">Meta Keyword Comma Separated</label>
                                        <input type="text" class="form-control" id="placeholderInput" value="{{ $faq->meta_keywords }}" name="meta_keywords">
                                    </div>
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">Meta Description</label>
                                        <textarea name="meta_description" class="form-control" rows="3">{{ $faq->meta_description }}</textarea>
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


