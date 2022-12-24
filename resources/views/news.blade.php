@extends('layouts.frontend')

@section('content')
<!-- Program Section -->
<div class="main-div">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="news-header">NEWS Of NITER</h3>
                <hr>
            </div>
            <div class="col-md-12">
                <div class="card border-secondary mb-3">
                    <div class="card-header" style="background-color: #bbffd4;"><b>NEWS</b></div>
                    <div class="card-body text-secondary">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="news">
                                        <div class="news-img">
                                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/1.JPG" alt="">
                                        </div>
                                        <div class="news-body">
                                            <h3>News Titile</h3>
                                            <hr>
                                            <a href="" class="btn btn-light">View Departmnet</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="news">
                                        <div class="news-img">
                                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/2.JPG" alt="">
                                        </div>
                                        <div class="news-body">
                                            <h3>News Titile</h3>
                                            <hr>
                                            <a href="" class="btn btn-light">View News</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="news">
                                        <div class="news-img">
                                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/3.webp" alt="">
                                        </div>
                                        <div class="news-body">
                                            <h3>News Titile</h3>
                                            <hr>
                                            <a href="" class="btn btn-light">View News</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="news">
                                        <div class="news-img">
                                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/4.webp" alt="">
                                        </div>
                                        <div class="news-body">
                                            <h3>News Titile</h3>
                                            <hr>
                                            <a href="" class="btn btn-light">View News</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="news">
                                        <div class="news-img">
                                            <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/5.jpg" alt="">
                                        </div>
                                        <div class="news-body">
                                            <h3>News Titile</h3>
                                            <hr>
                                            <a href="" class="btn btn-light">View News</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
