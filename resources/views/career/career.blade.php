@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">Job List</div>
                    <div class="card-body">
                        @forelse($careers as $career)
                            <div class="info border-bottom-1 p-2">
                                <h4><a href="{{ route('career.download',$career->slug) }}" class="color-black">{{ $career->title }}</a>
                                </h4>
                                <ul class="d-flex justify-content-between list-style">
                                    <li class="d-inline-block">Date : {{ $career->date_start }} to {{ $career->date_end }}</li>
                                </ul>
                            </div>
                        @empty
                            <h3 class="text-center">No Career Found</h3>
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
