@extends('layouts.frontend')

@section('content')
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-4">

                <div class="news-single-body">
                    <div class="card border-info">
                        <div class="card-header"><h2>{{ $news_info->title }}</h2></div>
                        <div class="card-body">
                            <div class="news-single-image">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ $news_info->getFirstMediaUrl('news') }}" alt="" style="height: 450px">
                                      </div>
                                        @foreach ($news_info->getMedia('newses') as $img)
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ $img->getUrl() }}" alt="" style="height: 450px">
                                      </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
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
