@extends('layouts.app')

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

                        <div class="col-xl-6 m-auto">
                            <div class="card border card-border-success">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">News Category Update</h6>
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
                                        <form action="{{ route('category.update', $category_info->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div>
                                                <label for="placeholderInput" class="form-label">Category Name</label>
                                                <input type="text" class="form-control" id="placeholderInput" value="{{ $category_info->name }}" name="name">
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
