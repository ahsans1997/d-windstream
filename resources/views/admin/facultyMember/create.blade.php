@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Create Faculty Member</h2>
                    </div>

                    <div class="news-form">
                        <form action="{{ route('faculty-member.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="name" class="form-label"> Name*</label>
                                    <input type="text" class="form-control" placeholder="Faculty Member Name"
                                        name="name" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="designation" class="form-label"> Designation*</label>
                                    <select class="form-control" name="designation" required>
                                        <option value="">Select designation</option>
                                        @foreach ($desigantions as $designation)
                                            <option value="{{$designation->id}}">{{$designation->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <label for="contact" class="form-label">Contact*</label>
                                    <input type="text" class="form-control" placeholder="contact" name="contact"
                                        required>
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
                                <div class="col-md-12">
                                    <label for="bio" class="form-label">Bio*</label>
                                    <textarea type="text" class="summernote form-control" placeholder="bio" name="bio" rows="2" required></textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="image" class="form-label">On Leave</label>
                                    <input type="checkbox" id="on_leave" name="on_leave" value="false">
                                </div>

                                <div class="col-md-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" placeholder="image" name="image">
                                </div>
                                <div class="col-md-3">
                                    <label for="image" class="form-label">File/Cv</label>
                                    <input type="file" class="form-control" placeholder="file or cv " name="file">
                                </div>
                            </div>
                            <h1>Education</h1> <button id="addeducation" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="education_table" class="table">
                                        <thead>
                                            <th>Degree Name</th>
                                            <th>Group/Major Subject</th>
                                            <th>Board/Institute</th>
                                            <th>Country</th>
                                            <th>Passing Year</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" name="eductation_dgree_name[]" required></td>
                                                <td><input type="text" class="form-control" name="eductation_subject[]" required></td>
                                                <td><input type="text" class="form-control" name="eductation_board[]" required></td>
                                                <td><select name="education_country[]" class="form-control" required>
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                    </select>
                                                </td>
                                                <td><select name="education_year[]" class="form-control" required>
                                                        @foreach ($years as $year)
                                                            <option value="{{ $year->year }}"
                                                                @if ($year->year == '2023') selected @endif>
                                                                {{ $year->year }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>


                            <h1>Experience</h1> <button id="addexperience" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="experience_table" class="table">
                                        <thead>
                                            <th>Title</th>
                                            <th>Organization</th>
                                            <th>Location</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="expirence_title[]" class="form-control" required></td>
                                                <td><input type="text" name="expirence_organization[]" class="form-control" required></td>
                                                <td><input type="text" name="expirence_location[]" class="form-control" required></td>
                                                <td><input type="text" name="expirence_from_date[]" class="datepicker form-control" required></td>
                                                <td><input type="text" name="expirence_to_date[]" class="datepicker experience_to_date_class form-control" required><br><input type="checkbox" class="cbox_experience_todate" value="0">Continue</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <h1>Membership</h1> <button id="addmembership" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="membership_table" class="table">
                                        <thead>
                                            <th>Collaboration & Membership Name</th>
                                            <th>Type</th>
                                            <th>Membership Year</th>
                                            <th>Expire Year</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="membership_naem[]" class="form-control" required></td>
                                                <td><input type="text" name="membership_type[]" class="form-control" required></td>
                                                <td><input type="text" name="membership_year[]" class="datepicker form-control" required></td>
                                                <td><input type="text" name="membership_expire_year[]" class="datepicker expire_year_to_life_time form-control" required><br><input type="checkbox" class="cbox_membership_expire" value="0">Life time</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <h1>Award</h1> <button id="addaward" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="award_table" class="table">
                                        <thead>
                                            <th>Award Type</th>
                                            <th>Title</th>
                                            <th>Year</th>
                                            <th>Country</th>
                                            <th>Description</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select name="award_type[]" class="form-control" required>
                                                        <option value="National" selected>National</option>
                                                        <option value="International">International</option>
                                                 </select>
                                                </td>

                                                <td><input type="text" name="award_title[]" class="form-control" required></td>
                                                <td><select name="award_year[]" class="form-control" required>
                                                    @foreach ($years as $year)
                                                        <option value="{{ $year->year }}"
                                                            @if ($year->year == '2023') selected @endif>
                                                            {{ $year->year }}</option>
                                                    @endforeach
                                                </select>
                                                </td>
                                                <td><select name="award_country[]" class="form-control" required>
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                    </select>
                                                </td>
                                                <td><input type="text" name="award_desciption[]" class="form-control" required></td>


                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>


                            <button type="submit"
                                class="btn btn-outline-success  mt-3 mb-5 pr-10" >Submit</button>
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

            function addEducation(years,countries){
                let year_text = '';
                let country_text = '<option value="">Select Country</option>';
                years.forEach(element => {
                    if(element.year == "2023"){
                        year_text += '<option value="'+ element.year +'" selected>'+element.year+'</option>';
                    }else{
                        year_text += '<option value="'+ element.year +'">'+element.year+'</option>';
                    }
                });
                countries.forEach(element => {
                    country_text += '<option value="'+element.id+'">'+element.name+'</option>';
                });
                $('#education_table tbody').append(
                    '<tr>'+
                    '<td><input type="text" class="form-control" name="eductation_dgree_name[]" required></td>'+
                    '<td><input type="text" class="form-control" name="eductation_subject[]" required></td>'+
                    '<td><input type="text" class="form-control" name="eductation_board[]" required></td>'+
                    '<td><select name="education_country[]" class="form-control" required>'+country_text+
                    '</select>'+
                    '</td>'+
                    '<td><select class="form-control" name="education_year[]" required>'+year_text+
                    '</select>'+
                    '</td>'+
                    '<td style="width: 40px"><lable  id="btnCancleEducation" class="btn btn-danger float-right">-</lable></td>' +
                    '</tr>'
                )
            }

            function addAwardAfterAjux(years,countries){
                let year_text = '';
                let country_text = '<option value="">Select Country</option>';
                years.forEach(element => {
                    if(element.year == "2023"){
                        year_text += '<option value="'+ element.year +'" selected>'+element.year+'</option>';
                    }else{
                        year_text += '<option value="'+ element.year +'">'+element.year+'</option>';
                    }
                });
                countries.forEach(element => {
                    country_text += '<option value="'+element.id+'">'+element.name+'</option>';
                });
                $('#award_table tbody').append(
                    '<tr>'+
                       '<td>'+
                            '<select class="form-control" name="award_type[]" required>'+
                                '<option value="National" selected>National</option>'+
                                '<option value="International">International</option>'+
                            '</select>'+
                        '</td>'+
                        '<td><input type="text" class="form-control" name="award_title[]" required></td>'+
                        '<td><select class="form-control" name="award_year[]" required>'+year_text+
                            '</select>'+
                        '</td>'+
                        '<td><select class="form-control" name="award_country[]" required>'+country_text+
                            '</select>'+
                        '</td>'+
                        '<td><input type="text" class="form-control" name="award_desciption[]" required></td>'+
                        '<td style="width: 40px"><lable  id="btnCancleAward" class="btn btn-danger float-right">-</lable></td>' +
                    '</tr>'
                )
            }

            $('#addeducation').on('click', function(e) {
                e.preventDefault();

                $.ajax({
                        type: 'get',
                        url: '{{ route('get-country-year') }}',
                        data: {
                            id: $(this).val()
                        },
                        success: function(result) {
                            addEducation(result.years,result.countries);

                        }
                    });

            });

            $(document).on("click", "#btnCancleEducation", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

            $('#addexperience').on('click',function(e){
                e.preventDefault();
                $('#experience_table tbody').append(
                    '<tr>'+
                        '<td><input type="text" class="form-control" name="expirence_title[]" required></td>'+
                        '<td><input type="text" class="form-control" name="expirence_organization[]" required></td>'+
                        '<td><input type="text" class="form-control" name="expirence_location[]" required></td>'+
                        '<td><input type="text" name="expirence_from_date[]" class="datepicker form-control" required></td>'+
                        '<td><input type="text" name="expirence_to_date[]" class="datepicker experience_to_date_class form-control" required><br><input type="checkbox" class="cbox_experience_todate" value="0">Continue</td>'+
                        '<td style="width: 40px"><lable  id="btnCancleExperience" class="btn btn-danger float-right">-</lable></td>' +
                    '</tr>'
                )
            });

            $(document).on("click", "#btnCancleExperience", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });
            $('#addmembership').on('click',function(e){
                e.preventDefault();
                $('#membership_table tbody').append(
                    '<tr>'+
                        '<td><input type="text" class="form-control" name="membership_naem[]" required></td>'+
                        '<td><input type="text" class="form-control" name="membership_type[]" required></td>'+
                        '<td><input type="text" name="membership_year[]" class="datepicker form-control" required></td>'+
                        '<td><input type="text" name="membership_expire_year[]" class="datepicker expire_year_to_life_time form-control" required><br><input type="checkbox" class="cbox_membership_expire" value="0">Life time</td>'+
                        '<td style="width: 40px"><lable  id="btnCancleMembership" class="btn btn-danger float-right">-</lable></td>' +
                    '</tr>'
                )
            });

            $(document).on("click", "#btnCancleMembership", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

            $('#addaward').on('click', function(e) {
                console.log('comes');
                e.preventDefault();
                $.ajax({
                        type: 'get',
                        url: '{{ route('get-country-year') }}',
                        data: {
                            id: $(this).val()
                        },
                        success: function(result) {
                            addAwardAfterAjux(result.years,result.countries);
                        }
                    });

            });

            $(document).on("click", "#btnCancleAward", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

            $(document).on("click", ".cbox_experience_todate", function(event) {
                $(this).parents("tr").find( "input.experience_to_date_class").val("Continue");


            });
            $(document).on("click", ".cbox_membership_expire", function(event) {
                $(this).parents("tr").find( "input.expire_year_to_life_time").val("Life Time");


            });

            $('#on_leave').on('click',function(e){

                if ($('[name="on_leave"]').is(":checked"))
                {
                    $(this).val("true");
                } else {
                    $(this).val("false");
                }
            });


        });
    </script>
@endpush
