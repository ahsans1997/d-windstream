@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Programs</h2>
                    </div>



                    <div class="table">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Duration(In month)</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($programs as $program)
                                <tr>
                                    <td>{{ $program->id}}</td>
                                    <td>{{ $program->name }}</td>
                                    <td>{{ $program->session_name }}</td>
                                    <td>{{ $program->department->name }}</td>
                                    <td>{{ $program->duration_in_month }}</td>

                                    <td>
                                         <a href="{{ route('programs.edit', $program->id) }}" class="btn btn-info btn-sm">Edit</a>
                                         <form action="{{ route('programs.destroy', $program->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



@endsection


