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
                        <h2>Edit Program</h2>
                    </div>

                    <div class="news-form">
                        <form action="{{ route('programs.update',$program->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="name" class="form-label"> Name*</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{$program->name}}" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="designation" class="form-label"> Session name*</label>
                                    <input type="text" class="form-control" placeholder="Session name" value="{{$program->session_name}}" name="session_name" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="designation" class="form-label">Course Duration*</label>
                                    <input type="number" class="form-control" placeholder="Course Duration In Month" name="course_duration" value="{{$program->duration_in_month}}" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="department_id" class="form-label">Deaprtment*</label>
                                    <select name="department_id" class="form-control" id="department_id" required>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}" @if ($department->id == $program->deaprtment_id) selected @endif>{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="department_id" class="form-label">Dgree Type*</label>
                                    <select name="dgree_type" class="form-control" id="dgree_type" required>
                                        <option value="UnderGraduate" @if ("UnderGraduate" == $program->dgree_type) selected @endif >UnderGraduate</option>
                                        <option value="Graduate" @if ("Graduate" == $program->dgree_type) selected @endif>Graduate</option>
                                        <option value="MPhil" @if ("MPhil" == $program->dgree_type) selected @endif>MPhil</option>
                                        <option value="PhD" @if ("PhD" == $program->dgree_type) selected @endif>PhD</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="slug" class="form-label">Slug*</label>
                                    <input type="text" class="form-control" placeholder="slug" name="slug" value="{{$program->slug}}" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="description" class="form-label">Description*</label>
                                    <textarea type="text" class="summernote form-control" placeholder="description" name="description" rows="3" required>{{$program->description}}</textarea>
                                </div>
                                <div class="col-md-12" style="height: 300px">
                                    <label for="description_list" class="form-label">Overview*</label>
                                    <textarea type="text" aria-multiline="true"  class="summernote form-control" name="description_list" required>{{$program->description_list}}</textarea>
                                </div>


                            </div>

                            <h4>Courses(Year/Semester)</h4>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="semister_table" class="table">
                                        <thead>
                                            <th>Name</th>
                                        </thead>
                                        <tbody id="semister_table_tbody">
                                            @foreach ($program->semister as $semister)

                                            {{-- {{ dd($semister)}} --}}

                                                <tr>
                                                    <td style="width: 200px"><input type="text" name="semister_course_name[{{$semister->id}}][]" value="{{$semister->name}}" class="form-control " required>

                                                        <input type="hidden" class="semister_id" name="semister_course_id[]" value="{{$semister->id}}">
                                                        <table class="table subjects_table">
                                                            <thead>

                                                                <th><button style="float: right" class="btn bg-info add_course">Add Course</button></th>
                                                            </thead>
                                                            <tbody >
                                                                @foreach ($semister->subjects as $subject)
                                                                <tr>
                                                                    <td>
                                                                        <div class="row col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label for="subjects_name" class="form-label">Name*</label>
                                                                                <input type="text" class="form-control"  name="subjects_name[{{$semister->id}}][]" value="{{$subject->name}}" required>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label for="subjects_code" class="form-label">Code*</label>
                                                                                <input type="text" class="form-control"  name="subjects_code[{{$semister->id}}][]" value="{{$subject->code}}" required>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label for="subjects_credit" class="form-label">Credit*</label>
                                                                                <input type="number" class=form-control"  name="subjects_credit[{{$semister->id}}][]" value="{{$subject->credit}}" required>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label for="subjects_description" class="form-label">Description*</label>
                                                                                <textarea type="text" class="summernote form-control"  name="subjects_description[{{$semister->id}}][]" required>{{$subject->description}}</textarea>
                                                                            </div>
                                                                            <button style="width: 100px;float:right"  id="btnCancleSubjects" class="btn btn-danger">-</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>

                                                        </table>

                                                    </td>
                                                </tr>
                                            @endforeach

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
                                           @foreach ($program->syllabus as $syllabus)
                                            <tr>
                                                <td style="width: 200px"><input type="text" name="syllabus_name[]" class="form-control " value="{{$syllabus->name}}" required></td>
                                                <td style="width: 200px"><input type="text" name="syllabus_link[]" class="form-control " value="{{$syllabus->link}}" required></td>
                                                <td style="width: 40px"><lable  id="btnCancleSyllabus" class="btn btn-danger float-right">-</lable></td>

                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>





                            <button type="submit"
                                class="btn btn-outline-success waves-effect waves-light mt-3 mb-5">Submit</button>
                        </form>
                    </div>

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <style>
        .summernote{
            height: 1000;
        }
    </style>
@endsection
@push('script')
    <script>
        $(document).ready(function() {

            $('#addsemister').on('click', function(e) {
                e.preventDefault();
                $('#semister_table #semister_table_tbody').append(
                    '<tr>'+
                        '<td style="width: 200px"><input type="text" name="semister_course_name[]" class="form-control" required></td>'+
                        '<td style="width: 40px"><lable  id="btnCancleSemister" class="btn btn-danger float-right">-</lable></td>' +

                    '</tr>'
                );
            });

            $(document).on("click", "#btnCancleSemister", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

            $(document).on("click", "#btnCancleSubjects", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

            $('.add_course').on("click",function(e){
                e.preventDefault();
                var id = $(this).parents("tr").find("input.semister_id").val();
                $(this).parents("tr").find("tbody").append(
                    '<tr>'+
                        '<td>'+
                            '<div class="row col-md-12">'+
                                '<div class="col-md-4">'+
                                    '<label for="subjects_name" class="form-label">Name*</label>'+
                                    '<input type="text" class="form-control"  name="subjects_name['+id+'][]" required>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<label for="subjects_code" class="form-label">Code*</label>'+
                                    '<input type="text" class="form-control"  name="subjects_code['+id+'][]"  required>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<label for="subjects_credit" class="form-label">Credit*</label>'+
                                    '<input type="number" class="form-control"  name="subjects_credit['+id+'][]"  required>'+
                                '</div>'+
                                '<div class="col-md-12">'+
                                    '<label for="subjects_description" class="form-label">Description*</label>'+
                                    '<textarea type="text" class="summernote form-control"  name="subjects_description['+id+'][]"  required></textarea>'+
                                '</div>'+
                                '<button style="width: 100px;float:right"  id="btnCancleSubjects" class="btn btn-danger">-</button>'+
                            '</div>'+
                        '</td>'+
                    '</tr>'
                );
                $('.summernote').summernote();


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

            $(document).on("click", "#btnCancleSyllabus", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

        });
    </script>
@endpush
