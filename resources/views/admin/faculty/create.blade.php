@extends('layouts.app')

@section('create.department')
    active
@endsection

@section('department.show')
    show
@endsection

@section('title')
Faculty
@endsection

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Create Faculty</h2>
                    </div>




                    <div class="news-form">
                        <form action="{{ route('faculty.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label for="placeholderInput" class="form-label"> Name</label>
                                <input type="text" class="form-control" id="placeholderInput" placeholder="Faculty Name" name="name">
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


