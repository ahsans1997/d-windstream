@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12 card-header"><h2>Offices List</h2></div>
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
                        <h3 class="text-center">No notice Found</h3>
                    @endforelse
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
