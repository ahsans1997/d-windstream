@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Page Edit</h2>
                    </div>

                    <div class="news-form">
                        <form action="{{ route('page.update',$page->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="title" class="form-label">Title*</label>
                                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{$page->title}}" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="title" class="form-label">Status*</label>
                                    <select name="status"  class="form-control" required >
                                        <option value="Active" {{ $page->status == 'Active' ? 'selected' : '' }}>Active</option>
                                        <option value="Inactive" {{ $page->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>


                                <div class="col-md-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" placeholder="imgae">
                                    @if (!empty($page->image))
                                        @php
                                            $ext = pathinfo($page->image, PATHINFO_EXTENSION);
                                        @endphp
                                        @if ($ext == 'apng' || $ext == 'avif' || $ext == 'gif' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'jfif' || $ext == 'pjpeg' || $ext == 'pjp' || $ext == 'png' || $ext == 'svg' || $ext == 'webp')
                                            <img alt="No File Uploaded" src="{{ asset('storage/page/' . $page->image) }}" style="width: 100px; height:100px;">
                                        @else
                                            <a target="_blank"  href="{{ asset('storage/page/' . $page->image) }}">
                                                <i class="fa-regular fa-file-pdf"></i>{{$page->image}}
                                            </a>
                                        @endif
                                    @else

                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <label for="file" class="form-label">File</label>
                                    <input type="file" class="form-control" name="file" placeholder="file">
                                    @if (!empty($page->file))
                                        @php
                                            $ext = pathinfo($page->file, PATHINFO_EXTENSION);
                                        @endphp
                                        @if ($ext == 'apng' || $ext == 'avif' || $ext == 'gif' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'jfif' || $ext == 'pjpeg' || $ext == 'pjp' || $ext == 'png' || $ext == 'svg' || $ext == 'webp')
                                            <img alt="No File Uploaded" src="{{ asset('storage/page/' . $page->file) }}" style="width: 100px; height:100px;">
                                        @else
                                            <a target="_blank"  href="{{ asset('storage/page/' . $page->file) }}">
                                                <i class="fa-regular fa-file-pdf"></i>{{$page->file}}
                                            </a>
                                        @endif
                                    @else

                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label for="designation" class="form-label">Description*</label>
                                    <textarea type="number" class="summernote form-control" placeholder="Description" name="description" required>{{$page->description}}</textarea>
                                </div>




                            </div>





                            <button type="submit"
                                class="btn btn-outline-success waves-effect waves-light mt-3 mb-5" >Submit</button>
                        </form>
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
@push('script')
    <script>
        $(document).ready(function() {


        });
    </script>
@endpush
