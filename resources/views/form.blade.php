@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card-header">Form List</div>
                    <div class="card-body">
                        @forelse($forms as $form)
                            <div class="info border-bottom-1 p-2">
                                <h4><a href="{{ route('form.download',$form->slug) }}" class="color-black">{{ $form->title }}</a>
                                </h4>
                                <ul class="d-flex justify-content-between list-style">
                                    <li class="d-inline-block">Date : {{ $form->created_at }}</li>
                                </ul>
                            </div>
                        @empty
                            <h3 class="text-center">No Form Found</h3>
                        @endforelse
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Links</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-style">
                                <li><i class="fa-solid fa-circle-arrow-right"></i><a class="mx-2" style="line-height: 35px" href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa-solid fa-circle-arrow-right"></i><a class="mx-2" style="line-height: 35px" href="{{ route('faq') }}">FAQ</a></li>
                                <li><i class="fa-solid fa-circle-arrow-right"></i><a class="mx-2" style="line-height: 35px" href="{{ route('contact') }}">Contact Us</a></li>
                                <li><i class="fa-solid fa-circle-arrow-right"></i><a class="mx-2" style="line-height: 35px" href="{{ url('/niter-form') }}">NITER Form</a></li>
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
