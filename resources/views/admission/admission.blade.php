@extends('layouts.frontend')

@section('content')
    <!-- Program Section -->
    <div class="main-div">

        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="program-sidebar">
                        <div class="card bg-light mb-3">
                            <div class="card-header">
                                <h2>Admission List</h2>
                            </div>
                            <div class="card-body">
                                <nav>
                                    <ul class="list-style" id="">
                                        <li><input type="checkbox" class="ahsan" id="search" name="search[]" value="UnderGraduate">Undergraduate Admission</li>
                                        <li><input type="checkbox" class="ahsan" id="search" name="search[]" value="Graduate">Graduate Admission</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8" id="program">
                    {{-- {{ dd($programs) }} --}}
                    @include('admission.admissionlist')

                </div>
            </div>
        </div>
    </div>
@endsection


