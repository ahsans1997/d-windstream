@forelse($admissions as $admission)
    <div class="program-list">
        <h2>{{$admission->title}}</h2>
        {{-- <button type="button" class="btn btn-light">Department Of {{$admission->department->department_short_form}}</button> --}}
        <button type="button" class="btn btn-light">{{ $admission->admission_type }}</button>
        <p>{!! Str::words($admission->overview, 50) !!}</p>
        <a href="{{ route('admission',$admission->slug) }}" class="btn" style="background-color: #A3332C; color:#fff;">Read More</a>
    </div>
@empty
    <div class="program-list">No Data Found</div>

@endif
