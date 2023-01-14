@if(isset($title_search)) <p class="alert alert-success col-md-12">{{ $title_search }}</p> @endif

@foreach ($researches as $research)
    <div class="col-md-4">
        <div class="research-p">
            <div class="research-p-img">
                <img class="img-fluid" src="{{ $research->getFirstMediaUrl('research') }}">
            </div>
            <div class="research-p-body">
                <h3>{{ Str::words($research->title, 6) }}</h3>
                <hr>
                <a href="{{ route('research',$research->slug) }}" class="btn btn-light">View Research</a>
            </div>
        </div>
    </div>
@endforeach
<div class="col-md-12 mt-5 text-right">
    {{ $researches->links() }}
</div>
