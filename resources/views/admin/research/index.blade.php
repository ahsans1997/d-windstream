@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="news-header">
                    <h2>Research</h2>
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
                <div class="table mt-5">
                    <table class="table table-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Department</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($researches as $research)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td>{{ $research->title }}</td>
                                    <td style="white-space: break-spaces;
                                    word-break: break-all;">{{ $research->description }}</td>
                                    <td>{{ $research->department->name }}</td>
                                    <td>
                                        <img src="{{ asset('/') }}assets/uploads/research/{{ $research->image }}" class="img-fluid" alt="" style="width: 100px">
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('research.edit',$research->id) }}" class="btn btn-success btn-sm waves-effect waves-light"><i class="ri-edit-2-fill"></i></a>
                                            <form action="{{ route('research.destroy',$research->id) }}" method="post">
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
