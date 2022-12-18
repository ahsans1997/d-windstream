@extends('layouts.app')

@section('title')
    News
@endsection

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Create News</h2>
                    </div>

                    <div class="news-form">
                        <form action="{{ route('news.store') }}" method="post">
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label">Title</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Title">
                            </div>
                            <div class="mt-4">
                                <label for="placeholderInput" class="form-label">Description</label>
                                <textarea name="" class="form-control" rows="6"></textarea>
                            </div>
                        </form>
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->





@endsection


