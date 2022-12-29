<div class="card profile-card">
    <div class="card-body">
        <div class="rounded-circle profile-image-rounded">

            @if (empty($image))

                <img style="width:100%" src="{{asset('frontend_asset/img/profile.jpg')}}" alt="">
            @else
                <img src="{{ $image }}">
            @endif
        </div>
        <div class="title">
            <h4><strong>{{ $name }}</strong></h4>
            <span>{{ $designation }}</span>
        </div>
        <div class="link">
            <a href="{{ $url }}">View Profile <i class="fa fa-check"></i></a>
        </div>

    </div>
</div>
