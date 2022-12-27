@extends('layouts.app')

@section('department')
    active
@endsection

@section('department.show')
    show
@endsection

@section('title')
    Faculty
@endsection

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Faculty</h2>
                    </div>



                    <div class="table">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faculties as $faculty)
                                <tr>
                                    <td>{{ $faculty->id}}</td>
                                    <td>{{ $faculty->name }}</td>

                                    <td>
                                         <a href="{{ route('faculty.edit', $faculty->id) }}" class="btn btn-info btn-sm">Edit</a>
                                         <form action="{{ route('faculty.destroy', $faculty->id) }}" method="post">
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


