@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="program-header">Program af NITER</h3>
                    <hr>
                </div>
                <div class="col-md-4">
                    <div class="program-sidebar">
                        <div class="card bg-light mb-3">
                            <div class="card-header">
                                <h2>Program List</h2>
                            </div>
                            <div class="card-body">
                                <nav>
                                    <ul>
                                        <li><input type="checkbox"><a href="">Undergraduate Program</a></li>
                                        <li><input type="checkbox"><a href="">Graduate Program</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    {{-- {{ dd($programs) }} --}}
                    @forelse($programs as $program)
                        <div class="program-list">
                            <h2>{{$program->name}}</h2>
                            <button type="button" class="btn btn-light">Department Of {{$program->department->department_short_form}}</button>
                            <button type="button" class="btn btn-light">{{ $program->dgree_type }}</button>
                            <p>{!! $program->description !!}</p>
                            <a href="{{ url('/program/'.$program->slug)}}" class="btn btn-success">Read More</a>
                        </div>
                    @empty
                        <div class="program-list">No Data Found</div>

                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
