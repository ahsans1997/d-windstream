@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">Clubs List</div>
                    <div class="card-body">
                        @forelse($careers as $career)
                            <div class="info border-bottom-1 p-2">
                                <h5><a href="{{ route('career',$career->slug) }}" class="color-black">{{ $career->title }}</a>
                                </h5>
                                <ul class="d-flex justify-content-between">
                                    <li class="d-inline-block">Date : {{ $career->date_start }} to {{ $career->date_end }}</li>
                                    <li class="d-inline-block pull-right">
                                        <a href="{{ route('career',$career->slug) }}" target="_blank"
                                            class="btn circle btn-dark border btn-sm text-center rounded-5">
                                            <i class="fas fa-plus" style="color: #002147"></i> Read More</a>
                                    </li>
                                </ul>
                            </div>
                        @empty
                            <h3 class="text-center">No notice Found</h3>
                        @endforelse
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
