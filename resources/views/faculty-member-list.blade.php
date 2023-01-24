@extends('layouts.frontend')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="search mb-5">
                    <label for="" style="color: black">Search By : </label>
                    <select id="search" name="desigantion" class="form-control" style="width: 300px">
                        <option value="all">Search By</option>
                        @foreach ($desigantions as $desigantion)
                            <option value="{{ $desigantion->id }}">{{ $desigantion->name }}</option>
                        @endforeach
                        <option value="leave">Study Leave</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12" >
                <div class="row" id="profile">
                    @include('member-search')
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
            $('#search').on('change', function(e) {
                // ajax search

                e.preventDefault();

                let search = $(this).val();
                $.ajax({
                    url: "{{ route('member-search') }}",
                    type: "GET",
                    data: {
                        search: search,
                    },
                    success: function(data) {
                        $('#profile').html(data);
                    }
                });

            });
        });
    </script>
@endpush
