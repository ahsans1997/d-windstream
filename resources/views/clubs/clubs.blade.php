@extends('layouts.frontend')

@section('content')

<div class="main-div">
    <div class="container">
        <div class="row">

            <div class="col-md-9" id="clubList">
                <div class="card-header"><h4 class="blockquote" style="font-size: 24px; line-height: 23px; margin: 0;">Clubs & Society List</h4></div>
                @include('clubs.clubslist')
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 style="margin: 0">Links</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-style">
                            <li><i class="fa-solid fa-circle-arrow-right"></i><a class="mx-2" style="line-height: 35px" href="{{ route('home') }}">Home</a></li>
                            <li><i class="fa-solid fa-circle-arrow-right"></i><a class="mx-2" style="line-height: 35px" href="{{ route('faq') }}">FAQ</a></li>
                            <li><i class="fa-solid fa-circle-arrow-right"></i><a class="mx-2" style="line-height: 35px" href="{{ url('/niter-form') }}">NITER Form</a></li>
                            <li><i class="fa-solid fa-circle-arrow-right"></i><a class="mx-2" style="line-height: 35px" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
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
