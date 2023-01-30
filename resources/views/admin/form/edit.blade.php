@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Create Form</h2>
                    </div>
                    <div class="form mt-3">
                        <form action="{{ route('form.update',$form->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="placeholderInput" class="form-label">Form Title</label>
                                <input type="text" class="form-control" id="placeholderInput" value="{{ $form->title }}" name="title">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Form Slug</label>
                                <input type="text" class="form-control" id="placeholderInput" value="{{ $form->title }}" name="slug">
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Form File</label>
                                <input type="file" class="form-control" name="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
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


@push('scripts')
    <script>
        $(function([
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            }),
        ]));
    </script>
@endpush
