@extends('layouts.frontend')

@section('content')

<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="published text-right"><i class="fa fa-table"></i> Published:
                    {{ $career->created_at->format('d-M-Y') }}</p>
                <h2><strong>{{ $career->title }}</strong></h2>
                <h5>Apply Date : {{ $career->date_start }} to {{ $career->date_end }}</h5>
                <a href="{{ route('career.download',$career->slug) }}" class="btn btn-info">Download Career PDF</a>
                <div class="notice-content mt-2">
                    {!! $career->description !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">NOTICE</h2>
                    </div>
                    <div class="card-body">
                        <ul class="d-block">
                            @foreach ($careers as $career)
                            <li class="d-block border-bottom-1">
                                <h4>
                                    <a style="font-size:18px;line-height:18px;" class="text-dark"
                                        href="{{ route('career', $career->slug) }}"><strong>{{ $career->title }}</strong></a>
                                </h4>
                            </li>
                            @endforeach
                        </ul>
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
