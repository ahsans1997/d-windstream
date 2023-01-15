@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Create Career</h2>
                    </div>
                    <div class="form mt-3">
                        <form action="{{ route('career.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label">Career Title</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Carrer Name" name="title">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Description</label>
                                <textarea name="description" class="summernote form-control" rows="6"></textarea>
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Start Date</label>
                                <input type="text" name="date_start" class="form-control datepicker">
                            </div>
                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">End Date</label>
                                <input type="text" name="date_end" class="form-control datepicker">
                            </div>

                            <div class="mt-2">
                                <label for="placeholderInput" class="form-label">Career File</label>
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
