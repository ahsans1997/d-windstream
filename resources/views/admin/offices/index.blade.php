@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="header">
                        <h2>Offices</h2>
                    </div>
                    <div class="table">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone Number</th>
                                    {{-- <th scope="col">Image</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($offices as $office)
                                    <tr>
                                        <th>{{ $office->id }}</th>
                                        <td>{{ $office->name }}</td>
                                        <td>{{ $office->address }}</td>
                                        <td>{{ $office->phone }}</td>
                                        {{-- <td>
                                            <img src="{{ $office->getFirstMediaUrl('offices') }}" class="img-fluid" alt="" style="width: 100px">
                                        </td> --}}
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('offices.edit',$office->id) }}" class="btn btn-success btn-sm waves-effect waves-light"><i class="ri-edit-2-fill"></i></a>
                                                <form action="{{ route('offices.destroy',$office->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>
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

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->




@endsection


