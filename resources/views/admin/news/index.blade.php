@extends('layouts.app')

@section('title')
    News
@endsection

@section('news')
    active
@endsection

@section('news.show')
    show
@endsection

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
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($news as $n)
                                    <tr>
                                        <th>{{ $loop->index + 1 }}</th>
                                        <td>{{ $n->title }}</td>
                                        <td class="text-wrap">{{ $n->description }}</td>
                                        <td>{{ $n->department->name }}</td>
                                        <td>{{ $n->category->name }}</td>
                                        <td>
                                            <img src="{{ asset('/') }}assets/uploads/news/{{ $n->image }}" class="img-fluid" alt="" style="width: 100px">
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('news.edit',$n->id) }}" class="btn btn-success btn-sm waves-effect waves-light"><i class="ri-edit-2-fill"></i></a>
                                                <form action="{{ route('news.destroy',$n->id) }}" method="post">
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


