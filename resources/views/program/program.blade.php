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
                                    <ul class="list-style">
                                        <li>
                                            <label for="undergrade"><input type="checkbox" class="search" id="undergrade"
                                                    value="UnderGraduate">Undergraduate Program
                                            </label>
                                        </li>
                                        <li><label for="grade">
                                                <input type="checkbox" class="search" id="grade"
                                                    value="Graduate">Graduate
                                                Program</label></li>
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



            $('.search').on('change', function(e) {
                e.preventDefault();
                let search = [];
                $('.search:checked').each(function(){
                    search.push($(this).val());
                });

                $.ajax({
                    url: "{{ route('program.search') }}",
                    type: "GET",
                    data: {
                        search: search
                    },
                    success: function(data) {
                        $('#program').html(data);
                    }
                });

            });
        });
    </script>
@endpush
