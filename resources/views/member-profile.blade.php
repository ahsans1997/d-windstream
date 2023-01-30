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
                                            <tr>
                                                <td>Deep Learning</td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Hyperspectral and Multispectral Imaging</td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>3D reconstruction for the purpose of 3D mapping/ robot navigation /
                                                    visual SLAM</td>
                                                <td> </td>
                                                <td> </td>
                                            </tr>
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
                                            <tr>
                                                <td colspan="7" class="text-center"> No project/research
                                                    supervision is
                                                    found
                                                </td>
                                            </tr>
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
                                            <tr>
                                                <td>Computer Vision</td>
                                                <td>A Fast and Efficient 3D Reconstruction Method for Crime Detection and
                                                    Disaster Response
                                                </td>
                                                <td>University Grants Commission, Bangladesh</td>
                                                <td>01-07-2019
                                                </td>
                                                <td>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Machine Learning and Hyperspectral Imaging</td>
                                                <td>3D Imaging for Phenotypic Trait Estimation of Beef and Sheep carcasses
                                                </td>
                                                <td>Australian Government Department of Agriculture and Water Resources</td>
                                                <td>01-09-2016
                                                </td>
                                                <td> 30-09-2017
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Computer Vision</td>
                                                <td>3D Reconstruction of Road Accident and Crime Scenes</td>
                                                <td>U.S. Department of Justice , Office of Justice Programs, National
                                                    Institute of Justice
                                                </td>
                                                <td>01-04-2014
                                                </td>
                                                <td> 31-03-2015
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Computer Vision</td>
                                                <td>Color Photometric Stereo for Non-Lambertian Multicolored Surfaces</td>
                                                <td>Japanese Ministry of Education, Science, Sports and Culture Grant-in-Aid
                                                    for Scientific
                                                    Research on Innovative Areas</td>
                                                <td>01-01-2013
                                                </td>
                                                <td> 31-12-2014
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Machine Learning and Hyperspectral Imaging</td>
                                                <td>Estimating Reflection Parameters, Light, and Shape from a Single View
                                                </td>
                                                <td>National ICT Australia (NICTA)</td>
                                                <td>01-07-2010
                                                </td>
                                                <td> 16-12-2014
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Computer Graphics</td>
                                                <td>Physically based Simulation and Rendering of Natural Phenomena</td>
                                                <td>Kawaguchi Laboratory, University of Tokyo, Japan</td>
                                                <td>01-04-2008
                                                </td>
                                                <td> 31-03-2010
                                                </td>
                                                <td></td>
                                            </tr>
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
                                            <tr>
                                                <td colspan="2" class="text-center"> No invited talk is found
                                                </td>
                                            </tr>
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
                                <table class="table-bordered width100per" rules="all" id="employee_details_web"
                                    style="border: 1px solid #d0d0d0">
                                    <tbody>
                                        <tr>
                                            <th colspan="2">Journal Article</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        Ragib Amin Nihal, Nawara Mahmood Broti, Shamim Ahmed Deowan and
                                                        <u>Sejuti Rahman</u>
                                                        <b>: Design and Development of a Humanoid Robot for Sign Language
                                                            Interpretation,</b>

                                                        SN Computer Science , vol.2 , no.3 , 2021
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        Sifat Ahmed, Tonmoy Hossain, Oishee Bintey Hoque, Sujan Sarker,
                                                        <u>Sejuti Rahman</u> and
                                                        Faisal Muhammad Shah <b>: Automated COVID-19 Detection from Chest
                                                            X-Ray Images: A
                                                            High-Resolution Network (HRNet) Approach,</b>

                                                        SN Computer Science , vol.2 , no.4 , 2021
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>Sejuti Rahman</u>, Syeda Faiza Ahmed, Omar Shahid, Musabbir
                                                        Arrafi and Md Atiqur
                                                        Rahman Ahad <b>: Automated Detection Approaches to Autism Spectrum
                                                            Disorder Based on
                                                            Human Activity Analysis: A Review,</b>

                                                        Cognitive Computation (Impact Factor: 4.980) , 2021
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>Sejuti Rahman</u>, Sujan Sarker, Md Abdullah Al Miraj, Ragib Amin
                                                        Nihal, A. K. M.
                                                        Nadimul Haque and Abdullah Al Noman <b>: Deep Learning Driven
                                                            Automated Detection of
                                                            COVID-19 from Radiography Images: A Comparative Analysis,</b>

                                                        Cognitive Computation (impact factor:4.980) , vol.(Accepted to be
                                                        published) , 2020
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>S. Rahman</u>, P. Quin, T. Walsh, T. Vidal-Calleja, M. J. McPhee,
                                                        E. Toohey and A.
                                                        Alempijevic <b>: Preliminary estimation of fat depth in the lamb
                                                            short loin using a
                                                            hyperspectral camera,</b>

                                                        Animal Production Science (impact factor:1.275) , vol.58 , no.8 ,
                                                        pp.1488 -1496 , 2018
                                                        . <div class="clearfix"></div>
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <a href="https://www.publish.csiro.au/an/an17795"
                                                                    title="Click for details view more"
                                                                    target="_blank">View
                                                                    More</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>S. Rahman</u> and A. Robles-Kelly <b>: Estimating reflectance
                                                            parameters, light
                                                            direction, and shape from a single multispectral image,</b>

                                                        IEEE Transactions on Computational Imaging (impact factor:5.640) ,
                                                        vol.3 , no.4 , pp.837
                                                        – 852 , 2017
                                                        . <div class="clearfix"></div>
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <a href="https://ieeexplore.ieee.org/document/7953651"
                                                                    title="Click for details view more"
                                                                    target="_blank">View
                                                                    More</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>S. Rahman</u> and A. Robles-Kelly <b>: An optimization approach
                                                            to the recovery of
                                                            reflection parameters from a single hyperspectral image,</b>

                                                        Computer Vision and Image Understanding (impact factor:3.121) ,
                                                        vol.117 , no.12 ,
                                                        pp.1672–1688 , 2014
                                                        . <div class="clearfix"></div>
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <a href="https://dl.acm.org/citation.cfm?id=2542804"
                                                                    title="Click for details view more"
                                                                    target="_blank">View
                                                                    More</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"
                                                style="height: 20px;background: #fff;border-left:1px solid #fff;border-right:1px solid #fff;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Conference Proceedings</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>S. Rahman</u>, A. Lam, I. Sato and A. Robles-Kelly "A Rainbow
                                                        Light for Color
                                                        Photometric Stereo for Non-Lambertian Multicolored Surfaces."
                                                        <i>
                                                            WICV Workshop of IEEE Conference on Computer Vision and Pattern
                                                            Recognition</i>
                                                        Las Vegas, NV, USA: 2016
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>S. Rahman</u>, A. Lam, I. Sato and A. Robles-Kelly "Color
                                                        Photometric Stereo for
                                                        Non-Lambertian Multicolored Surfaces."
                                                        <i>
                                                            Asian Conference on Computer Vision (ACCV)</i>
                                                        , pp. 335-350. Singapore.: Springer, Cham, 2014
                                                        . <div class="clearfix"></div>
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <a href="https://link.springer.com/chapter/10.1007/978-3-319-16865-4_22"
                                                                    title="Click for details view more"
                                                                    target="_blank">View
                                                                    More</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>S. Rahman</u> and A. Robles-Kelly "A Method for Estimating Light
                                                        Direction, Shape,
                                                        and Reflection Parameters from a Single Image."
                                                        <i>
                                                            IEEE International Conference on Image Processing (ICIP)</i>
                                                        Melbourne, Australia: 2013
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>S. Rahman</u> and A. Robles-Kelly "On the Recovery of Shape and
                                                        Reflectance
                                                        Parameters from a Single Multispectral Image, in Proceedings of.."
                                                        <i>
                                                            IEEE Conference on Digital Image Computing and Technology
                                                            Australia (DICTA)</i>
                                                        Noosa, Australia: 2011
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>S. Rahman</u> and Y. Kawaguchi "Simulating Natural Bubble Ring
                                                        Phenomenon Using
                                                        Particle Level Set Method."
                                                        <i>
                                                            ASIAGRAPH</i>
                                                        Tokyo, Japan: 2009
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        <u>S. Rahman</u> and Y. Kawaguchi "Simulating Realistic Bubble and
                                                        Foam Floating on
                                                        Fluid."
                                                        <i>
                                                            ASIAGRAPH</i>
                                                        Shanghai, China: 2008
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                        R. Shimada, <u>S. Rahman</u> and Y. Kawaguchi "Simulating the
                                                        Coalescence and Separation
                                                        of Bubble and Foam by Particle Level Set Method."
                                                        <i>
                                                            Computer Graphics, Imaging and Visualization: Modern Techniques
                                                            and Applications
                                                            (CGIV)</i>
                                                        Penang, Malaysia: 2008
                                                        . <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
