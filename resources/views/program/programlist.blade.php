@forelse($programs as $program)
    <div class="program-list">
        <h2>{{$program->name}}</h2>
        <button type="button" class="btn btn-light">Department Of {{$program->department->department_short_form}}</button>
        <button type="button" class="btn btn-light">{{ $program->dgree_type }}</button>
        <p>{!! Str::words($program->description, 50) !!}</p>
        <a href="{{ url('/program/'.$program->slug)}}" class="btn" style="background-color: #A3332C; color:#fff;">Read More</a>
    </div>
@empty
    <div class="program-list">No Data Found</div>
@endif
