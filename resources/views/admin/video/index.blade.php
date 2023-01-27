@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">All videos</div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($videos as $video)
                                    <div class="col-md-3">
                                        <div class="single-image">
                                            <img src="{{ $video->getFirstMediaUrl('videos') }}" class="img-fluid"
                                                style="width: 235px; height: 150px" alt="">
                                            <a href="{{ route('video.edit', $video->id) }}" class="btn btn-primary btn-sm mt-2"
                                                style="float: left">Edit</a>
                                            <form action="{{ route('video.destroy', $video->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm mt-2"
                                                    style="float: right">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add videos</div>
                        <div class="card-body">
                            <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="">Video image</label>
                                <input type="file" name="images" class="form-control" multiple>
                                <label class="mt-2" for="">Video Link</label>
                                <textarea name="video" class="form-control" rows="6"></textarea>
                                <button type="submit" class="btn btn-success mt-3" style="float: right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
