@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header">Add videos</div>
                        <div class="card-body">
                            <form action="{{ route('video.update', $video->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <img src="{{ $video->getFirstMediaUrl('videos') }}" class="img-fluid" alt="">
                                <label for="">Video image</label>
                                <input type="file" name="images" class="form-control" multiple>
                                <label class="mt-2" for="">Video Link</label>
                                <textarea name="video" class="form-control" rows="6">{{ $video->video }}</textarea>
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
