@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Page Create</h2>
                    </div>

                    <div class="news-form">
                        <form action="{{ route('page.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="title" class="form-label">Title*</label>
                                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="designation" class="form-label">Slug*</label>
                                    <input type="text" class="form-control" placeholder="Slug" name="slug" required>
                                </div>




                                <div class="col-md-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" placeholder="imgae">
                                </div>

                                <div class="col-md-3">
                                    <label for="file" class="form-label">File</label>
                                    <input type="file" class="form-control" name="file" placeholder="file">
                                </div>
                                <div class="col-md-12">
                                    <label for="designation" class="form-label">Description*</label>
                                    <textarea type="number" class="summernote form-control" placeholder="Description" name="description" required></textarea>
                                </div>




                            </div>





                            <button type="submit"
                                class="btn btn-outline-success waves-effect waves-light mt-3 mb-5" >Submit</button>
                        </form>
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
@push('script')
    <script>
        $(document).ready(function() {


        });
    </script>
@endpush
