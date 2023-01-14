@forelse($clubs as $club)
    <div class="info border-bottom-1 p-2">
        <h5><a href="{{ route('clubs',$club->slug) }}" class="color-black">{{ $club->name }}</a>
        </h5>
        <ul class="d-flex justify-content-between">
            <li class="d-inline-block"></li>
            <li class="d-inline-block pull-right">
                <a href="{{ route('clubs',$club->slug) }}" target="_blank"
                    class="btn circle btn-dark border btn-sm text-center rounded-5">
                    <i class="fas fa-plus" style="color: #002147"></i> Read More</a>
            </li>
        </ul>
    </div>
@empty
    <h3 class="text-center">No notice Found</h3>
@endforelse
