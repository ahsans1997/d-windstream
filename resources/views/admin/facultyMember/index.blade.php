@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Faculty Member</h2>
                    </div>



                    <div class="table">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Department</th>
                                    <th>Order Number</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faculty_members as $member)
                                <tr>
                                    <td>{{ $member->id}}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->contact }}</td>
                                    <td>{{ $member->department->name }}</td>
                                    <td>{{ $member->order }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('faculty-member.edit', $member->id) }}" class="btn btn-info btn-sm waves-effect waves-light">Edit</a>

                                            <a href="{{ route('faculty-member-research-add', $member->id) }}" class="btn btn-primary btn-sm waves-effect waves-light">Add Research</a>
                                            <form action="{{ route('faculty-member.destroy', $member->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>
                                            </form>
                                        </div>
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


