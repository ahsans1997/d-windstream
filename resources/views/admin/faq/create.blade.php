@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Create FAQ</h2>
                    </div>
                    <div class="form mt-3">
                        <form action="{{ route('faq.store') }}" method="post">
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label">Question</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Question" name="question">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Answer</label>
                                <textarea name="answer" class="summernote form-control" rows="6"></textarea>
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Section</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="section">
                                    <option selected value="">Open this select section</option>
                                    <option value="1">General</option>
                                    <option value="2">Undergraduate</option>
                                    <option value="3">Postgraduate</option>
                                    <option value="4">Certificates & Documents Related</option>
                                    <option value="5">Library related</option>
                                </select>
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


