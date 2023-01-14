@extends('layouts.frontend')

@section('content')

<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-12 card-header">Clubs List</div>

            <div class="col-md-12 pt-3" id="clubList">
                @include('clubs.clubslist')
            </div>
        </div>
    </div>

</div>


@endsection


@push('script')
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
