@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Add faculty member research</h2>
                    </div>

                    <div class="news-form">
                        <form action="{{ route('faculty-member-research-store',$faculty_member->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <h4>Research Interest</h4> <button id="addResearchInterest" class="btn btn-info" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="research_interest" class="table">
                                        <thead>
                                            <th>Subject*</th>
                                            <th>Description</th>
                                            <th>Research Interest (Goal, Target Indicator)</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($faculty_member->research_interests as $research_interest)

                                                <tr>
                                                    <td><input type="text" class="form-control" name="research_interset_subject[]" value="{{$research_interest->subject}}" required></td>
                                                    <td><textarea type="text" class="summernote form-control" name="research_interset_description[]" >{{$research_interest->description}}</textarea></td>
                                                    <td><textarea type="text" class="summernote form-control" name="research_interset_goal[]" >{{$research_interest->rechach_interest_target_goal}}</textarea></td>
                                                    <td style="width: 40px"><lable  id="btnCancleResearchInterest" class="btn btn-danger float-right">-</lable></td>;
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <h4>Project/Research Supervision</h4> <button id="addResearchSupervission" class="btn btn-info" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="research_supervision" class="table">
                                        <thead>
                                            <th>Level of Study*</th>
                                            <th>Title*</th>
                                            <th>Supervisor*</th>
                                            <th>Co-Supervisor(s)</th>
                                            <th>Name of Student(s)*</th>
                                            <th>Area of Research</th>
                                            <th>Current Completion</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($faculty_member->research_supervisions as $research_supervision)

                                                <tr>
                                                    <td><input type="text" class="form-control" name="research_supervision_level_study[]" value="{{$research_supervision->level_of_study}}" required></td>
                                                    <td><input type="text" class="form-control" name="research_supervision_title[]" value="{{$research_supervision->title}}" required></td>
                                                    <td><input type="text" class="form-control" name="research_supervision_supervisor[]" value="{{$research_supervision->supervisor}}" required></td>
                                                    <td><input type="text" class="form-control" name="research_supervision_co_supervisor[]" value="{{$research_supervision->co_supervisor}}"></td>
                                                    <td><input type="text" class="form-control" name="research_supervision_student[]" value="{{$research_supervision->student_name}}" required></td>
                                                    <td><input type="text" class="form-control" name="research_supervision_area_of_research[]" value="{{$research_supervision->area_of_research}}"></td>
                                                    <td><input type="text" class="form-control" name="research_supervision_current_competion[]" value="{{$research_supervision->current_completion}}"></td>
                                                    <td style="width: 40px"><lable  id="btnCancleResearchSupervisor" class="btn btn-danger float-right">-</lable></td>;
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <h4>Project/Research Work</h4> <button id="addResearchWork" class="btn btn-info" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="research_work" class="table">
                                        <thead>
                                            <th>Subject*</th>
                                            <th>Project Name*</th>
                                            <th>Source of Fund*</th>
                                            <th>From Date*</th>
                                            <th>To Date</th>
                                            <th>Collaboration</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($faculty_member->research_works as $research_work)

                                                <tr>
                                                    <td><input type="text" class="form-control" name="research_work_subject[]" value="{{$research_work->subject}}" required></td>
                                                    <td><input type="text" class="form-control" name="research_work_project_name[]" value="{{$research_work->project_name}}" required></td>
                                                    <td><input type="text" class="form-control" name="research_work_source_of_fund[]" value="{{$research_work->source_of_funding}}" required></td>
                                                    <td><input type="text" class="form-control datepicker" name="research_work_from_date[]" value="{{$research_work->from_date}}" required></td>
                                                    <td><input type="text" class="form-control datepicker" name="research_work_to_date[]" value="{{$research_work->to_date}}" ></td>
                                                    <td><input type="text" class="form-control" name="research_work_collaboration[]" value="{{$research_work->collaboration}}" ></td>
                                                    <td style="width: 40px"><lable  id="btnCancleResearchWork" class="btn btn-danger float-right">-</lable></td>;
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <h4>Invited Talk</h4> <button class="btn btn-info" id="addInvitedTalk" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="research_invited_talk" class="table">
                                        <thead>
                                            <th>Invited Talk*</th>


                                        </thead>
                                        <tbody>
                                            @foreach ($faculty_member->invited_talks as $invited_talk)

                                                <tr>
                                                    <td><textarea type="text" class="summernote form-control" name="invited_talk_title[]"  required>{{$invited_talk->invited_talk_title}}}</textarea></td>

                                                    <td style="width: 40px"><lable  id="btnCancleResearcInvitedTalk" class="btn btn-danger float-right">-</lable></td>;
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>



                            <button type="submit" class="btn btn-outline-success  mt-3 mb-5 pr-10" >Submit Research </button>
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

            $('#addResearchInterest').on('click', function(e) {
                e.preventDefault();
                var html = '';
                html += '<tr>';
                html += '<td><input type="text" class="form-control" name="research_interset_subject[]" required></td>';
                html += '<td><textarea type="text" class="summernote form-control" name="research_interset_description[]" ></textarea></td>';
                html += '<td><textarea type="text" class="summernote form-control" name="research_interset_goal[]" ></textarea></td>';
                html += '<td style="width: 40px"><lable  id="btnCancleResearchInterest" class="btn btn-danger float-right">-</lable></td>';
                html += '</tr>';
                $('#research_interest tbody').append(html);
                $('.summernote').summernote();

            });

            $(document).on("click", "#btnCancleResearchInterest", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

            $('#addResearchSupervission').on('click',function(e){
                e.preventDefault();
                var html = '';
                html += '<tr>';
                html += '<td><input type="text" class="form-control" name="research_supervision_level_study[]" required></td>';
                html += '<td><input type="text" class="form-control" name="research_supervision_title[]" required></td>';
                html += '<td><input type="text" class="form-control" name="research_supervision_supervisor[]" required></td>';
                html += '<td><input type="text" class="form-control" name="research_supervision_co_supervisor[]" ></td>';
                html += '<td><input type="text" class="form-control" name="research_supervision_student[]" required></td>';
                html += '<td><input type="text" class="form-control" name="research_supervision_area_of_research[]" ></td>';
                html += '<td><input type="text" class="form-control" name="research_supervision_current_competion[]" ></td>';
                html += '<td style="width: 40px"><lable  id="btnCancleResearchSupervisor" class="btn btn-danger float-right">-</lable></td>';
                html += '</tr>';
                $('#research_supervision tbody').append(html);

            });

            $(document).on("click", "#btnCancleResearchSupervisor", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

            $('#addResearchWork').on('click',function(e){
                e.preventDefault();
                var html = '';
                html += '<tr>';
                html += '<td><input type="text" class="form-control" name="research_work_subject[]" required></td>';
                html += '<td><input type="text" class="form-control" name="research_work_project_name[]" required></td>';
                html += '<td><input type="text" class="form-control" name="research_work_source_of_fund[]" required></td>';
                html += '<td><input type="text" class="form-control datepicker" name="research_work_from_date[]" required></td>';
                html += '<td><input type="text" class="form-control datepicker" name="research_work_to_date[]" ></td>';
                html += '<td><input type="text" class="form-control" name="research_work_collaboration[]" ></td>';
                html += '<td style="width: 40px"><lable  id="btnCancleResearchWork" class="btn btn-danger float-right">-</lable></td>';
                html += '</tr>';
                $('#research_work tbody').append(html);

            });

            $(document).on("click", "#btnCancleResearchWork", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });

            $('#addInvitedTalk').on('click',function(e){
                e.preventDefault();
                var html = '';
                html += '<tr>';
                html += '<td><textarea type="text" class="summernote form-control" name="invited_talk_title[]" required></textarea></td>';
                html += '<td style="width: 40px"><lable  id="btnCancleResearcInvitedTalk" class="btn btn-danger float-right">-</lable></td>';
                html += '</tr>';
                $('#research_invited_talk tbody').append(html);
                $('.summernote').summernote();

            });

            $(document).on("click", "#btnCancleResearcInvitedTalk", function(event) {
                event.preventDefault();
                $(this).closest("tr").remove();

            });


        });
    </script>
@endpush
