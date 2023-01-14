@if(isset($title_search)) <p class="alert alert-success col-md-12">{{ $title_search }}</p> @endif

@foreach ($events as $event)
    <div class="col-md-4 mt-4">
        <div class="event-p">
            <div class="event-p-img">
                <img class="img-fluid" src="{{ $event->getFirstMediaUrl('event') }}" alt="">
            </div>
            <div class="event-p-body">
                <h3>{{ Str::words($event->title, 7) }}</h3>
                <hr>
                <a href="{{ route('event.single',$event->slug) }}" class="btn btn-light">View event</a>
            </div>
        </div>
    </div>
@endforeach
<div class="col-md-12 mt-5 text-right">
    {{ $events->links() }}
</div>
