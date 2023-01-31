@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card-header"><h4 style="font-size: 24px; border-left: 7px solid #A3332C; line-height: 23px; padding-left: 10px; margin: 0;">Offices List</h4></div>
                    <div class="card-body">
                        @forelse($offices as $office)
                            <div class="info border-bottom-1 p-2">
                                <h5><a href="{{ route('offices',$office->slug) }}" class="color-black">{{ $office->name }}</a>
                                </h5>
                                <ul class="d-flex justify-content-between">
                                    <li class="d-inline-block"></li>
                                    <li class="d-inline-block pull-right">
                                        <a href="{{ route('offices',$office->slug) }}" target="_blank"
                                            class="btn circle btn-dark border btn-sm text-center rounded-5">
                                            <i class="fas fa-plus" style="color: #002147"></i> Read More</a>
                                    </li>
                                </ul>
                            </div>
                        @empty
                            <h3 class="text-center">No Offices Found</h3>
                        @endforelse
                    </div>
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
