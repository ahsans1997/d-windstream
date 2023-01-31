@if(isset($title_search)) <p class="alert alert-success col-md-12">{{ $title_search }}</p> @endif

@foreach ($news as $n)
    <div class="col-md-4 ">
        <div class="news">
            <div class="news-img">
                <img class="img-fluid" src="{{ $n->getFirstMediaUrl('news') }}" alt="">
            </div>
            <div class="news-body">
                <h3>{{ Str::limit($n->title, 40) }}</h3>

            </div>
            <div class="news-footer p-3">
                <hr>
                <a href="{{ route('news.single',$n->slug) }}" class="btn btn-light">View News</a>
            </div>
        </div>
    </div>
@endforeach
<div class="col-md-12 mt-5 text-right">
    {{ $news->links() }}
</div>
