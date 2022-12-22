@extends('layouts.app')

@section('create.news.category')
active
@endsection

@section('title')
News Category
@endsection

@section('content')



<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="news-header">
                    <h2>News Category</h2>
                </div>
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card border card-border-success">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">News Category</h6>
                                </div>
                                <div class="card-body mt-3">
                                    @if (session('delete'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('delete') }}
                                    </div>
                                    @endif
                                    <!-- Tables Without Borders -->
                                    <table class="table table-borderless table-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl No.</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                            <tr>
                                                <th class="text-center">{{ $loop->index + 1 }}</th>
                                                <td class="text-center">{{ $category->name }}</td>
                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{ route('category.edit', $category->id) }}"
                                                            class="btn btn-success btn-icon waves-effect waves-light"><i
                                                                class="ri-edit-2-fill"></i></a>
                                                        <form action="{{ route('category.destroy',$category->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                                    class="ri-delete-bin-5-line"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card border card-border-success">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">News Category Add</h6>
                                </div>
                                <div class="card-body mt-3">
                                    @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    @endif
                                    @error('name')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    @enderror
                                    <div class="news-form">
                                        <form action="{{ route('category.store') }}" method="post">
                                            @csrf
                                            <div>
                                                <label for="placeholderInput" class="form-label">Category Name</label>
                                                <input type="text" class="form-control" id="placeholderInput"
                                                    placeholder="News Ctategory Name" name="name">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-outline-success waves-effect waves-light mt-3 mb-5">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->


@endsection
