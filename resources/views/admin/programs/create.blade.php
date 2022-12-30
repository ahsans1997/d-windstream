@extends('layouts.app')

@section('create.department')
    active
@endsection

@section('department.show')
    show
@endsection

@section('title')
Programs Create
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Create Program</h2>
                    </div>

                    <div class="news-form">
                        <form action="{{ route('programs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="name" class="form-label"> Name*</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="designation" class="form-label"> Session name*</label>
                                    <input type="text" class="form-control" placeholder="Session name" name="session_name" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="designation" class="form-label">Course Duration*</label>
                                    <input type="number" class="form-control" placeholder="Course Duration In Month" name="course_duration" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="department_id" class="form-label">Deaprtment*</label>
                                    <select name="department_id" class="form-control" id="department_id" required>
                                        <option value="">Select Department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="department_id" class="form-label">Dgree Type*</label>
                                    <select name="dgree_type" class="form-control" id="dgree_type" required>
                                        <option value="">Select Type</option>
                                        <option value="UnderGraduate">UnderGraduate</option>
                                        <option value="Graduate">Graduate</option>
                                        <option value="MPhil">MPhil</option>
                                        <option value="PhD">PhD</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="bio" class="form-label">Description*</label>
                                    <textarea type="text" class="form-control summernote" placeholder="description" name="description" rows="2" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="bio" class="form-label">Description List*</label>
                                    <textarea type="text" class="form-control summernote" placeholder="description list" name="description_list" rows="2" required></textarea>
                                </div>


                            </div>

                            <h4>Courses(Year/Semester)</h4> <button id="addsemister" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="semister_table" class="table">
                                        <thead>
                                            <th>Name</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 200px"><input type="text" name="semister_course_name[]" class="form-control " required></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <h4>All Syllabus</h4> <button id="addsyllabus" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="syllabus_table" class="table">
                                        <thead>
                                            <th>Name</th>
                                            <th>Link</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 200px"><input type="text" name="syllabus_name[]" class="form-control " required></td>
                                                <td style="width: 200px"><input type="text" name="syllabus_link[]" class="form-control " required></td>
                                            </tr>

                                        </tbody>
                                    </table>
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
            $('#addsemister').on('click', function(e) {
                e.preventDefault();
                $('#semister_table tbody').append(
                    '<tr>'+
                        '<td style="width: 200px"><input type="text" name="semister_course_name[]" class="form-control" required></td>'+
                        '<td style="width: 40px"><lable  id="btnCancleSemister" class="btn btn-danger float-right">-</lable></td>' +

                    '</tr>'
                );
            });
            $('#addsyllabus').on('click', function(e) {
                e.preventDefault();
                $('#syllabus_table tbody').append(
                   '<tr>'+
                        '<td style="width: 200px"><input type="text" name="syllabus_name[]" class="form-control " required></td>'+
                        '<td style="width: 200px"><input type="text" name="syllabus_link[]" class="form-control " required></td>'+
                        '<td style="width: 40px"><lable  id="btnCancleSyllabus" class="btn btn-danger float-right">-</lable></td>' +
                    '</tr>'
                );
            });

            $(document).on("click", "#btnCancleSemister", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

            $(document).on("click", "#btnCancleSyllabus", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

        });
    </script>
@endpush
