@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header" style=" padding-top: 35px;">
                            <div class="form-group">


                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" name="search" class="form-control" placeholder="Search News">
                                    </div>

                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-block" id="search">
                                            <i class="fa fa-search"></i> Search
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{route('research')}}" class="btn btn-danger btn-block">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-secondary">
                            <div class="container">
                                <div class="row researchList">
                                    @include('research.researchlist')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/') }}assets/libs/jqueryui/jquery-ui.min.css">
    <script src="{{ asset('/') }}assets/libs/jqueryui/jquery-ui.min.js"></script>

    <script>
        $(function() {
            $('#search').on('click', function() {
                var search = $('input[name=search]').val();
                var url = "{{ route('research.search') }}";
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {search: search},
                    success: function(data) {
                        $('.researchList').html(data);
                    }
                });
            });
        });
    </script>

@endpush








