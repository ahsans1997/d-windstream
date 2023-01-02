@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Pages</h2>
                    </div>

                    <div class="table">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $item)
                                <tr>
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->slug}}</td>
                                    <td>{{ $item->status}}</td>


                                    <td>
                                         <a href="{{ route('page.edit', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                                         {{-- <form action="{{ route('page.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>
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


