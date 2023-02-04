@extends('layouts.frontend')

@section('content')

<div class="main-div">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <span class="badge badge-success" style="position: absolute; margin-top: -30px;">Chairman</span>
                            <div class="container">
                                <div class="row">
                                    @foreach ($chairmans as $chairman)
                                        <div class="col-md-6">
                                            <div class="card" style="padding: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 3px 15px 5px;">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                            <img src="{{ $chairman->getFirstMediaUrl('governingbody') }}" style="border: 1px solid gray; width:100px; height:130px" alt="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h5 class="mt-3" style="font-weight: 700">{{ $chairman->name }}</h5>
                                                        <h6>{{ $chairman->designation }}</h6>
                                                        <h6>{{ $chairman->institute }}</h6>
                                                        <h6>{{ $chairman->location }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body">
                            <span class="badge badge-info" style="position: absolute; margin-top: -30px;">Member</span>
                            <div class="container">
                                <div class="row">
                                    @foreach ($members as $member)
                                        <div class="col-md-6">
                                            <div class="card mb-3" style="padding: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 3px 15px 5px;">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                            <img src="{{ $member->getFirstMediaUrl('governingbody') }}" style="border: 1px solid gray; width:100px; height:130px" alt="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h5 class="mt-3" style="font-weight: 700">{{ $member->name }}</h5>
                                                        <h6>{{ $member->designation }}</h6>
                                                        <h6>{{ $member->institute }}</h6>
                                                        <h6>{{ $member->location }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body">
                            <span class="badge badge-warning" style="position: absolute; margin-top: -30px;">Secretary</span>
                            <div class="container">
                                <div class="row">
                                    @foreach ($secretarys as $secretary)
                                        <div class="col-md-6">
                                            <div class="card" style="padding: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 3px 15px 5px;">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                            <img src="{{ $secretary->getFirstMediaUrl('governingbody') }}" style="border: 1px solid gray; width:100px; height:130px" alt="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h5 class="mt-3" style="font-weight: 700">{{ $secretary->name }}</h5>
                                                        <h6>{{ $secretary->designation }}</h6>
                                                        <h6>{{ $secretary->institute }}</h6>
                                                        <h6>{{ $secretary->location }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
