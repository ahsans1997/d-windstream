@extends('layouts.frontend')

@section('content')
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="news-single-body">
                    <div class="card border-info">
                        <div class="card-header"><h2>{{ $research->title }}</h2></div>
                        <div class="card-body">
                            <div class="news-single-image">
                                <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/2.JPG" alt="">
                            </div>
                            <button type="button" class="btn btn-light"></button>

                            <div class="news-description">
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-info">
                    <div class="card-header">Letest News</div>
                    <div class="card-body">
                        <nav>
                            <ul>
                                @foreach ($researchs as $r)
                                    <li style="line-height: 40px;"><a href="{{ route('research',$r->slug) }}"><i class="fa-solid fa-arrow-right-long"></i> {{ Str::limit($r->title, 35) }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
