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
                                    <ul class="list-style">
                                        <li><input type="checkbox">Undergraduate Program</li>
                                        <li><input type="checkbox">Graduate Program</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    {{-- {{ dd($programs) }} --}}
                    @include('program.programlist')

                </div>
            </div>
        </div>
    </div>
@endsection
