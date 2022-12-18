@extends('layouts.app')

@section('title')
    Department
@endsection

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Department</h2>
                    </div>

                    <div class="table">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Department Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>{{ $department->description }}</td>
                                    <td>October 15, 2021</td>
                                    <td>October 15, 2021</td>
                                    <td>October 15, 2021</td>
                                    <td>$2,300</td>
                                    <td>
                                        {{-- <a href="{{ route('news.edit') }}" class="btn btn-success btn-sm waves-effect waves-light"><i class="ri-edit-2-fill"></i></a>
                                        <a href="{{ route('news.show') }}" class="btn btn-info btn-sm btn-icon waves-effect waves-light"><i class="ri-check-double-line"></i></a>
                                        <form action="{{ route('news.destroy') }}" method="post">
                                            <button type="submit" class="btn btn-danger btn-sm btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>
                                        </form> --}}

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


