@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">All Image</div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($photos->getMedia('gallery') as $photo)
                                    <div class="col-md-3">
                                        <div class="single-image" >
                                            <img src="{{ $photo->getUrl() }}" class="img-fluid" style="width: 235px; height: 150px" alt="">
                                            <form action="{{ route('gallery.delete', [1, $photo->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm mt-2" style="float: right">Delete</button>
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
                        <div class="card-header">Add Image</div>
                        <div class="card-body">
                            <form action="{{ route('gallery.update',1) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label for="">Image</label>
                                <input type="file" name="images" class="form-control" multiple>
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
