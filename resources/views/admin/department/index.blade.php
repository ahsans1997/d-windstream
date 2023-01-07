@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Department</h2>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('delete'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('delete') }}
                        </div>
                    @endif

                    <div class="table">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Department Name</th>
                                    {{-- <th scope="col">Facebook</th>
                                    <th scope="col">Twiter</th>
                                    <th scope="col">Linkdin</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $department->name }}</td>
                                    {{-- <td>
                                        @php
                                            $social_link = $department->social_link;
                                            $facebook = json_decode($social_link);
                                            echo $facebook->facebook;
                                        @endphp
                                    </td>
                                    <td>
                                        @php
                                            $social_link = $department->social_link;
                                            $twiter = json_decode($social_link);
                                            echo $twiter->twiter;
                                        @endphp
                                    </td>
                                    <td>
                                        @php
                                            $social_link = $department->social_link;
                                            $linkdin = json_decode($social_link);
                                            echo $linkdin->linkdin;
                                        @endphp
                                    </td> --}}

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('department.edit', $department->id) }}" class="btn btn-success btn-icon waves-effect waves-light"><i class="ri-edit-2-fill"></i></a>
                                            <form action="{{ route('department.destroy', $department->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>
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


