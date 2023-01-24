@forelse ($faculty_members as $member)
    <div class="col-sm-4">
        <div class="card profile-card">
            <div class="card-body">
                <div class="rounded-circle profile-image-rounded">
                    <img style="width:100%"
                        src="{{ !empty($member->image) ? 'storage/facultyMember/' . $member->image : asset('frontend_asset/img/profile.jpg') }}"
                        alt="">

                </div>
                <div class="title">
                    <h4><strong>{{ $member->name }}</strong></h4>
                    <span>{{ $member->designation->name }}</span>
                </div>
                <div class="link">
                    <a href="{{ url('member-profile', $member->slug) }}">View Profile <i
                            class="fa fa-check"></i></a>
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="col-sm-12">
        <h2 class="alert alert-warning text-center">No Member Found..</h2>
    </div>
@endforelse
