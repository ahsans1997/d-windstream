@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="club mb-4" >
                        <img class="img-fluid" src="{{ $club->getFirstMediaUrl('club') }}" alt="">
                        <h3 class="mt-3" style="font-size: 40px; font-weight: 700;">{{ $club->name }}</h3>
                        <button type="button" class="btn btn-light mt-2">{{ $club->department->name }}</button>
                        <p class="mt-5">{!! $club->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
