@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="program-sidebar">
                        <div class="card bg-light mb-3">
                            <div class="card-header">
                                <h2>Program List</h2>
                            </div>
                            <div class="card-body">
                                <nav>
                                    <ul class="list-style" id="">
                                        <li><input type="checkbox" class="search" id="search1" value="UnderGraduate">Undergraduate Program</li>
                                        <li><input type="checkbox" class="search" id="search2" value="Graduate">Graduate Program</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8" id="program">
                    {{-- {{ dd($programs) }} --}}
                    @include('program.programlist')

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
            let search = [];
            $('.search').on('change', function(e) {
                // ajax search

                e.preventDefault();
                search = [];

                if($(this).is(':checked'))
                {
                    search.push($(this).val());
                }

                $.ajax({
                    url: "{{ route('program.search') }}",
                    type: "GET",
                    data: {
                        search: search
                    },
                    success: function(data) {
                        $('#program').html(data);
                        // alert(data);
                    }
                });

            });
        });
    </script>
@endpush