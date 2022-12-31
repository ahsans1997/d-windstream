@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="program-header">Program Of NITER</h3>
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
                    @forelse($programs as $program)
                        <div class="program-list">
                            <h2>{{$program->title}}</h2>
                            <button type="button" class="btn btn-light">Department Of CSE</button>
                            <button type="button" class="btn btn-light">Undergraduate</button>
                            <p>{{$program->description}}</p>
                            <button class="btn btn-success">Read more</button>
                        </div>
                    @else
                        <div class="program-list">No Data Found</div>

                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
