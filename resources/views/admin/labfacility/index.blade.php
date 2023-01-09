@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="labfacility-header">
                        <h2>Lab Facility</h2>
                    </div>
                    <div class="table">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($labfacilities as $labfacility)
                                    <tr>
                                        <th>{{ $labfacility->id }}</th>
                                        <td class="text-wrap">{{ $labfacility->title }}</td>
                                        <td>{{ $labfacility->department->name }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">

                                                <a href="{{ route('labfacility.edit',$labfacility->id) }}" class="btn btn-outline-primary btn-icon waves-effect waves-light btn-sm"><i class="ri-edit-2-fill"></i></a>
                                                <form action="{{ route('labfacility.destroy',$labfacility->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-icon waves-effect waves-light btn-sm"><i class="ri-delete-bin-5-line"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-danger text-center" colspan="50">No More Data</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        {{ $labfacilities->links() }}
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->




@endsection




