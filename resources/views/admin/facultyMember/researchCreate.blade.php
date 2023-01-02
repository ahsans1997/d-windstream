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
                        <form action="{{ route('faculty-member.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <h4>Research Interest</h4> <button id="addResearchInterest" style="float: right">Add</button>

                            <div class="row">
                                <div class="col-md-12">

                                    <table id="research_interest" class="table">
                                        <thead>
                                            <th>Subject*</th>
                                            <th>Description</th>
                                            <th>Research Interest (Goal, Target Indicator)</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" name="research_interset_subject[]" required></td>
                                                <td><input type="text" class="summernote form-control" name="research_interset_description[]" required></td>
                                                <td><input type="text" class="summernote form-control" name="research_interset_goal[]" required></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>



                            <button type="submit" class="btn btn-outline-success  mt-3 mb-5 pr-10" >Add Research </button>
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
                html += '<td><input type="text" class="summernote form-control" name="research_interset_description[]" ></td>';
                html += '<td><input type="text" class="summernote form-control" name="research_interset_goal[]" ></td>';
                html += '</tr>';
                $('#research_interest tbody').append(html);

            });

        });
    </script>
@endpush
