@extends('layouts.frontend')

@section('content')
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="news-single-body">
                    <div class="card border-info">
                        <div class="card-header"><h2>{{ $news_info->title }}</h2></div>
                        <div class="card-body">
                            <div class="news-single-image">
                                <img class="img-fluid" src="{{ asset('/') }}frontend_asset/img/news/2.JPG" alt="">
                            </div>
                            <button type="button" class="btn btn-light">{{ $news_info->department->name }}</button>
                            <button type="button" class="btn btn-light">{{ $news_info->category->name }}</button>

                            <div class="news-description">
                                <p>
                                    {{ $news_info->description }}
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
                                @foreach ($news as $n)
                                    <li style="line-height: 40px;"><a href="{{ route('news.single',$n->slug) }}"><i class="fa-solid fa-arrow-right-long"></i> {{ Str::limit($n->title, 35) }}</a></li>
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
