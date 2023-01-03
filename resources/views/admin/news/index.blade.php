@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>NEWS</h2>
                    </div>
                    <div class="table">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($news as $n)
                                    <tr>
                                        <th>{{ $n->id }}</th>
                                        <td class="text-wrap">{{ $n->title }}</td>
                                        <td class="text-wrap">{{ $n->description }}</td>
                                        <td>{{ $n->department->name }}</td>
                                        <td>{{ $n->category->name }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                @if ($n->action == 1)
                                                    <a href="{{ route('news.action',$n->id) }}" class="btn btn-success btn-icon waves-effect waves-light btn-sm"><i class="ri-eye-fill"></i></a>
                                                @else
                                                    <a href="{{ route('news.action',$n->id) }}" class="btn btn-danger btn-icon waves-effect waves-light btn-sm"><i class="ri-eye-off-fill"></i></a>
                                                @endif
                                                @if ($n->featured == 1)
                                                    <a href="{{ route('news.featured',$n->id) }}" class="btn btn-outline-success btn-icon waves-effect waves-light btn-sm"><i class="ri-eye-fill"></i></a>
                                                @else
                                                    <a href="{{ route('news.featured',$n->id) }}" class="btn btn-outline-danger btn-icon waves-effect waves-light btn-sm"><i class="ri-eye-off-fill"></i></a>
                                                @endif
                                                <a href="{{ route('news.edit',$n->id) }}" class="btn btn-outline-primary btn-icon waves-effect waves-light btn-sm"><i class="ri-edit-2-fill"></i></a>
                                                <form action="{{ route('news.destroy',$n->id) }}" method="post">
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
                        {{ $news->links() }}
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->




@endsection




