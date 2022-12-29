@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Edit Designation</h2>
                    </div>




                    <div class="news-form">
                        <form action="{{ route('designation.update',$designation->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label"> Name*</label>
                                <input type="text" class="form-control" id="placeholderInput" value="{{$designation->name}}" placeholder="Designation Name" name="name">
                            </div>


                            <button type="submit" class="btn btn-outline-success waves-effect waves-light mt-3 mb-5">Submit</button>
                        </form>
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->





@endsection


