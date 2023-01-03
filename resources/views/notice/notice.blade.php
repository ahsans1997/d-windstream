@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container news-all">
            <div class="card">
                <div class="row m-0 justify-content-between">



                    <div class="col-md-12 card-header">
                        <h2>Notice Board</h2>
                        <div class="form-group">


                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="search" class="form-control" placeholder="Search Notice">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" name="from_date" class="form-control datepicker"
                                        placeholder="From Date">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" name="to_date" class="form-control datepicker"
                                        placeholder="To Date">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary btn-block" id="search">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{route('notice')}}" class="btn btn-danger btn-block">Reset</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 pt-3" id="noticeList">
                        @include('notice.noticelist')
                    </div>

                    <div class="col-md-3 m-2 border">
                        <h2 class="font-bold border-bottom-1 mt-1">Usefull Links</h2>
                        {!! usefullLinks() !!}
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
            $(".datepicker").datepicker();

            $('#search').on('click', function(e) {
                // ajax search notice 

                e.preventDefault();

                $.ajax({
                    url: "{{ route('notice-search') }}",
                    type: "GET",
                    data: {
                        search: $('input[name="search"]').val(),
                        from_date: $('input[name="from_date"]').val(),
                        to_date: $('input[name="to_date"]').val(),
                    },
                    success: function(data) {
                        $('#noticeList').html(data);
                    }
                });

            });

        });
    </script>
    <style>
        .border-bottom-1 {
            border-bottom: 1px solid #ddd;
            margin-bottom: 15px;
        }

        .news-all h5 a {
            font-weight: bold;
        }

        .news-all h5 a:hover {
            color: orange;
            text-decoration: none;
        }

        .circle {
            border-radius: 5%;
            background: none;
            color: #000;
            border: 2px solid #000 !important;
        }
    </style>
@endpush
