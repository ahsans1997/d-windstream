@extends('layouts.app')

@section('department')
    active
@endsection

@section('department.show')
    show
@endsection

@section('title')
    Designation
@endsection

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Designation</h2>
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
                                @foreach ($designations as $item)
                                <tr>
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->name }}</td>

                                    <td>
                                         <a href="{{ route('designation.edit', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        
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


