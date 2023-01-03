@if(isset($title_search)) <p class="alert alert-success">{{ $title_search }}</p> @endif

@forelse($notices as $notice)
    <div class="info border-bottom-1 p-2">
        <h5><a href="{{ route('notice',$notice->slug) }}" class="color-black">{{ $notice->title }}</a>
        </h5>
        <ul class="d-flex justify-content-between">
            <li class="d-inline-block">Published Date:
                {{ $notice->created_at->format('d-M-Y') }}
            </li>
            <li class="d-inline-block pull-right">
                <a href="{{ route('notice',$notice->slug) }}" target="_blank"
                    class="btn circle btn-dark border btn-sm text-center rounded-5">
                    <i class="fas fa-plus" style="color: #002147"></i> Read More</a>
            </li>
        </ul>
    </div>
@empty

    <h3 class="text-center">No notice Found</h3>
@endforelse

<div class="pagination">
    {{ $notices->links() }}
</div>
