@extends('layouts.frontend')

@section('content')
    <div class="container mt-5 " style="">

        <div class="row mb-5">
            <div class="col d-flex">
                <img src="{{ url('/') }}{{ !empty($member->image) ? '/storage/facultyMember/' . $member->image : '' }}"
                    class="img-thumbnail" style="width: 200px;" alt="Thumb">
                <div class="info ml-5">
                    <h2 class="bold">{{ $member->name }}</h2>
                    <span>
                        ({{ $member->designation->name }})</span>
                    <p>
                        Department of {{ $member->department->name }}
                    </p>
                </div>
            </div>
            <div class="col">
                @if($member->file)
                    <a href="{{ route('member-profile.download',$member->slug) }}" class="btn button-color mt-3" style="float:right; font-size: 20px;"><i class="fa-solid fa-download" style="margin-right: 10px"></i>Print</a>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="course-info-list text-justify">
                </div>

                <div class="course-info-list text-justify">
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff; border: none;" data-toggle="tab" href="#bio"
                                    aria-expanded="true">
                                    Bio
                                </a>
                            </li>
                            <li>
                                <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff; border: none;" data-toggle="tab" href="#educationInfo"
                                    aria-expanded="true">
                                    Education
                                </a>
                            </li>
                            <li>
                                <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff; border: none;" data-toggle="tab" href="#experience"
                                    aria-expanded="false">
                                    Experience
                                </a>
                            </li>
                            <li>
                                <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff; border: none;" data-toggle="tab" href="#researchActivities"
                                    aria-expanded="false">
                                    Research Activities
                                </a>
                            </li>
                            <li>
                                <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff; border: none;" data-toggle="tab" href="#membershipInfo"
                                    aria-expanded="false">
                                    Membership
                                </a>
                            </li>
                            <li>
                                <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff; border: none;" data-toggle="tab" href="#publicationInfo"
                                    aria-expanded="false">
                                    Publication
                                </a>
                            </li>
                            <li>
                                <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff; border: none;" data-toggle="tab" href="#awardInfo"
                                    aria-expanded="false">
                                    Award
                                </a>
                            </li>

                            <li>
                                <a class="btn rounded-0 m-1" style="background-color: #A3332C; color: #fff; border: none;" data-toggle="tab" href="#contactInfo"
                                    aria-expanded="false">
                                    Contact
                                </a>
                            </li>


                        </ul>
                        <div class="tab-content tab-content-info pl-2 pr-2">

                            <!-- Single Tab -->
                            <div id="bio" class="tab-pane fade active in show">
                                <div class="info title">
                                    {!! $member->bio !!}
                                </div>
                            </div>


                            <div id="educationInfo" class="tab-pane fade">
                                <div class="info title">
                                    <div class="table-responsive">
                                        <table class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th nowrap="">Degree Name</th>
                                                    <th>Group/Major Subject</th>
                                                    <th>Board/Institute</th>
                                                    <th>Country</th>
                                                    <th nowrap="">Passing Year</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($member->education as $education)
                                                    <tr>
                                                        <td>{{ $education->degree_name }}</td>
                                                        <td>{{ $education->subject }}</td>
                                                        <td>{{ $education->board_or_institute }}</td>
                                                        <td>{{ country($education->country_id)->name  }}</td>
                                                        <td>{{ $education->passing_year }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <div id="experience" class="tab-pane fade">
                                <div class="info title">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Organization</th>
                                                <th>Location</th>
                                                <th class="width10per" nowrap="">From Date</th>
                                                <th class="width10per">To Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($member->experience as $experience)
                                                <tr>
                                                    <td>{{ $experience->title }}</td>
                                                    <td>{{ $experience->organization }}</td>
                                                    <td>{{ $experience->location }}</td>
                                                    <td>{{ $experience->from_date }}</td>
                                                    <td>{{ $experience->to_date }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="researchActivities" class="tab-pane fade">
                                <div class="info title">
                                    <h3 class="text-center padding-5px">Research Interest</h3>
                                    <table class="table table-striped width100per">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Description</th>
                                                <th>Research Interest (Goal, Target Indicator)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($member->research_interests as $research_interest)
                                                <tr>
                                                    <td class="text-wrap">{{ $research_interest->subject }}</td>
                                                    <td class="text-wrap">{{ $research_interest->description }}</td>
                                                    <td class="text-wrap">{{ $research_interest->rechach_interest_target_goal }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">No Research Interest Found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                    <div class="clearfix"></div>
                                    <h3 class="text-center default-padding-top ">Project/Research Supervision
                                    </h3>
                                    <div class="clearfix"></div>
                                    <table class="table table-striped width100per">
                                        <thead>
                                            <tr>
                                                <th>Level of Study</th>
                                                <th>Title</th>
                                                <th>Supervisor</th>
                                                <th>Co-Supervisor(s)</th>
                                                <th>Name of Student(s)</th>
                                                <th>Area of Research</th>
                                                <th>Current Completion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($member->research_supervisions as $research_supervision)
                                                <tr>
                                                    <td class="text-wrap">{{ $research_supervision->level_of_study }}</td>
                                                    <td class="text-wrap">{{ $research_supervision->title }}</td>
                                                    <td class="text-wrap">{{ $research_supervision->supervisor }}</td>
                                                    <td class="text-wrap">{{ $research_supervision->co_supervisor }}</td>
                                                    <td class="text-wrap">{{ $research_supervision->student_name }}</td>
                                                    <td class="text-wrap">{{ $research_supervision->area_of_research }}</td>
                                                    <td class="text-wrap">{{ $research_supervision->current_completion }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center"> No project/research
                                                        supervision is
                                                        found
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                    <div class="clearfix"></div>
                                    <div>
                                        <h3 class="text-center default-padding-top"> Project/Research Work</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <table class="table table-striped width100per">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Project Name</th>
                                                <th>Source of Fund</th>
                                                <th class="width10per">From Date</th>
                                                <th class="width10per">To Date</th>
                                                <th>Collaboration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($member->research_works as $research_work)
                                                <tr>
                                                    <td class="text-wrap">{{ $research_work->subject }}</td>
                                                    <td class="text-wrap">{{ $research_work->project_name }}</td>
                                                    <td class="text-wrap">{{ $research_work->source_of_funding }}</td>
                                                    <td class="text-wrap">{{ $research_work->from_date }}</td>
                                                    <td class="text-wrap">{{ $research_work->to_date }}</td>
                                                    <td class="text-wrap">{{ $research_work->collaboration }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center"> No project/research work is
                                                        found
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>


                                    <div class="clearfix"></div>
                                    <div>
                                        <h3 class="text-center default-padding-top">Invited Talk</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <table class="table table-striped width100per">
                                        <thead>
                                            <tr>
                                                <th class="width2per">SL</th>
                                                <th>Invited Talk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($member->invited_talks as $invited_talk)
                                                <tr>
                                                    <td class="text-wrap">{{ $loop->iteration }}</td>
                                                    <td class="text-wrap">{{ $invited_talk->invited_talk }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="2" class="text-center"> No invited talk is found
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>


                                </div>
                            </div>

                            <div id="membershipInfo" class="tab-pane fade">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                {{-- <th class="width2per">SL</th> --}}
                                                <th class="width30per"> Collaboration &amp; Membership Name</th>
                                                <th class="width20per">Type</th>
                                                <th class="width20per">Membership Year</th>
                                                <th class="width20per"> Expire Year</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($member->membership as $membership)
                                                <tr>
                                                    {{-- <td></td> --}}
                                                    <td>{{ $membership->title }}</td>
                                                    <td>{{ $membership->type }}</td>
                                                    <td>{{ $membership->membership_year }}</td>
                                                    <td>{{ $membership->expire_year }}</td>
                                                </tr>
                                            @empty

                                                <tr>
                                                    <td colspan="5" class="text-center">No Data Found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div id="publicationInfo" class="tab-pane fade">
                                <table class="table-bordered width100per w-100" rules="all" id="employee_details_web"
                                    style="border: 1px solid #d0d0d0">
                                    <tbody>
                                        <tr>
                                            <th colspan="2">Journal Article</th>
                                        </tr>
                                        @php
                                            $journal = 0;
                                        @endphp
                                        @foreach ($member->publications as $publication)
                                            @if ($publication->type == 'Journal Article')
                                                <tr>
                                                    <td>
                                                        @php
                                                            $journal++;
                                                            echo $journal;
                                                        @endphp
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <div class="">
                                                                {!! $publication->description !!}
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        <tr>
                                            <td colspan="2"
                                                style="height: 20px;background: #fff;border-left:1px solid #fff;border-right:1px solid #fff;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Conference Proceedings</th>
                                        </tr>
                                        @php
                                            $conference = 0;
                                        @endphp
                                        @foreach ($member->publications as $publication)
                                            @if ($publication->type == 'Conference Proceedings')
                                                <tr>
                                                    <td>
                                                        @php
                                                            $conference++;
                                                            echo $conference;
                                                        @endphp
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <div class="">
                                                                {!! $publication->description !!}
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                        <tr>
                                            <td colspan="2"
                                                style="height: 20px;background: #fff;border-left:1px solid #fff;border-right:1px solid #fff;">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>




                            </div>
                            <div id="awardInfo" class="tab-pane fade">
                                <div class="info title">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="width10per" nowrap="">Award Type</th>
                                                <th class="width25per">Title</th>
                                                <th class="width7per">Year</th>
                                                <th class="width7per">Country</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @forelse ($member->award as $award)
                                          <tr>
                                              <td>{{ $award->type }}</td>
                                              <td>{{ $award->title }}</td>
                                              <td>{{ $award->year }}</td>
                                              <td>{{ country($award->country_id)->name }}</td>
                                              <td>{{ $award->description }}</td>
                                          </tr>
                                      @empty

                                          <tr>
                                              <td colspan="5" class="text-center">No Data Found</td>
                                          </tr>
                                      @endforelse
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <div id="contactInfo" class="tab-pane fade">
                                <div class="info title">
                                    <div class="col-lg-10 col-md-9 col-sm-6 col-xs-12">
                                        {!! $member->contact !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
