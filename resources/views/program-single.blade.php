@extends('layouts.frontend')

@section('content')
<!-- Program Section -->
<div class="main-div">

    <div class="container program-single">
        <div class="row">

            <div class="col-md-10">
                <div class="">
                    <h2 class="mb-5"><strong>B.Sc. in Robotics and Mechatronics Engineering (48 Months)</strong></h2>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="pr-5 right-bar">
                                    <h3>Faculty</h3>
                                    <P>Engineering and Technology</P>
                                </div>
                                <div class="pl-5">
                                    <h3>DURATION</h3>
                                    <p><i class="fa fa-clock"></i> 4 Years</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-5 tabbox">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item rounded-0" role="presentation">
                                <button class="nav-link active rounded-0" id="home-tab" data-toggle="tab"
                                    data-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0" id="profile-tab" data-toggle="tab"
                                    data-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Curriculum & Courses</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0" id="contact-tab" data-toggle="tab"
                                    data-target="#contact" type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">All Syllabus</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body">
                                    <h4>Program Description</h4>
                                    <p>
                                    </p>
                                    <h1 style="text-align:center">B.Sc. in Robotics and Mechatronics Engineering</h1>

                                    <h2 style="text-align:center">Session: 2017-18 and 2018-19</h2>

                                    <h3> </h3>

                                    <h4 style="text-align:justify">1. Duration of the Program: 4 years.</h4>

                                    <h4 style="text-align:justify">2. Total Semester: 8 (2 semester per year).</h4>

                                    <h4 style="text-align:justify">3. Total Credits: 160</h4>

                                    <h4 style="text-align:justify">4. Class: 15 active weeks.</h4>

                                    <h4 style="text-align:justify">5. Preparatory Leave: 2 weeks</h4>

                                    <h4 style="text-align:justify">6. Teaching of the courses:</h4>

                                    <ul>
                                        <li style="text-align:justify">
                                            <h4>- For each credit of a theory course, there will be 1 class per week of
                                                1 hour duration.
                                            </h4>
                                        </li>
                                        <li style="text-align:justify">
                                            <h4>- Total classes in a semester for each credit of a theory course will be
                                                15 (15x1).</h4>
                                        </li>
                                        <li style="text-align:justify">
                                            <h4>- Total Contact Hours in a semester for each 1 credit theory course:
                                                15x1=15.</h4>
                                        </li>
                                        <li style="text-align:justify">
                                            <h4>- For each 1 credit lab course, there will be 1 class per week of 2
                                                hours duration.</h4>
                                        </li>
                                        <li style="text-align:justify">
                                            <h4>- Total classes in a semester for each 1 credit lab course in 15 weeks:
                                                15x1=15.</h4>
                                        </li>
                                        <li style="text-align:justify">
                                            <h4>- Total Contact Hours in a semester for each 1 credit lab course:
                                                15x2=30.</h4>
                                        </li>
                                    </ul>

                                    <h4 style="text-align:justify"> </h4>

                                    <h4 style="text-align:justify">7. Evaluation of the courses are based on university
                                        rules.</h4>

                                    <h4 style="text-align:justify">8. Grading System: The current UGC approved grading
                                        system applies as
                                        per university rules.</h4>
                                    <p></p>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body">
                                    <h2>List of Courses(Year/Semester)</h2>

                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        First Year | 1st Semester
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <ul>

                                                        <div class="title">
                                                            <i class="fas fa-file"></i> RME1101 | Fundamentals of
                                                            Mechanical Engineering | 3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_1"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_1" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Fundamentals of Mechanical Engineering
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Introduction: Scope of Mechanical
                                                                            Engineering, Study of Sources of Energy-
                                                                            Conventional and Renewable Energy.
                                                                            Thermodynamics: Fundamental Concepts and
                                                                            Laws, Thermodynamic Properties, Open
                                                                            and Closed Systems, Control Volumes,
                                                                            Thermodynamic Cycles, Reversibility and
                                                                            Irreversibility, Equation of State.
                                                                            Heat Transfer: Introduction to Heat
                                                                            Transfer, Modes of Heat Transfer, Steady and
                                                                            Unsteady State Heat Conduction, Convection
                                                                            Heat transfer - Natural and Forced
                                                                            Convection, Radiation Heat Transfer.
                                                                            Major Mechanical Applications: Introduction
                                                                            to Internal Combustion Engines and
                                                                            Their Cycles, Automobiles, Steam Generation
                                                                            Units with Accessories and
                                                                            Mountings, Fluid Machinery- Fan, Blower,
                                                                            Compressor and Pump (Classification and
                                                                            Working Principles), Study of Impulse and
                                                                            Reaction Turbines, Refrigeration and
                                                                            Air-conditioning Systems.
                                                                            Books Recommended:
                                                                            1. Engineering Thermodynamics – Michael J.
                                                                            Moran, Howard N. Shapiro, Daisie D.
                                                                            Boettner and Margaret B. Bailey, Wiley.
                                                                            2. Introduction to Thermodynamics and Heat
                                                                            Transfer - Yunus A. Cengel, McGraw
                                                                            Hill.
                                                                            3. Heat Engineering - V.P. Vasandani and
                                                                            D.S.Kumar, Metropolitan.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1102
                                                            |


                                                            Fundamentals of Computing |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_2"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_2" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Fundamentals of Computing
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Number System: Binary, Decimal, Hexadecimal,
                                                                            Octal number systems, Arithmetic in
                                                                            Different Number Systems.
                                                                            Combinatorial Logic: Logic Gates and Boolean
                                                                            Algebra, Combinational Circuits
                                                                            Design using Logic Gates, Minimization of
                                                                            Functions, Algebraic Simplification,
                                                                            The Karnaugh Map.
                                                                            Introduction to Computers: Components of a
                                                                            Computer System, Importance and
                                                                            Limitations of Computers, Classification of
                                                                            Computers, Computer Generations.
                                                                            Input and Output Devices: I/O Operations and
                                                                            Interfaces, Input Devices, Output
                                                                            Devices.
                                                                            Microprocessors: Functions of
                                                                            Microprocessors, Organization of a
                                                                            Microprocessor,
                                                                            Arithmetic Logic Unit, Control Unit.
                                                                            Memory Organization: Classification of
                                                                            Memory, Memory Hierarchies, Primary
                                                                            Memory, Secondary Memory, Comparisons of
                                                                            Primary Memory and Secondary Memory.
                                                                            Computer Software: Software, Classification
                                                                            of Software, Programming Languages,
                                                                            The Role of BIOS, Language Translators,
                                                                            Operating System, Tasks of an OS, Types
                                                                            of OS.
                                                                            Computer Networks and the Internet:
                                                                            Introduction to Computer Network, Network
                                                                            Terminologies, LAN Topology, Transmission
                                                                            Media, Communication Over Telephone
                                                                            Lines, Evolution of the Internet, Internet
                                                                            Services, Internet Address,
                                                                            Electronic Mail, The World Wide Web.
                                                                            IT Applications: Concepts and Applications
                                                                            of IT, Electronic Commerce, Access,
                                                                            Control, Security.
                                                                            Books Recommended:
                                                                            1. Digital Systems: Principles and
                                                                            Applications - Ronald Tocci, Neal Widmer and
                                                                            Greg Moss, Prentice Hall.
                                                                            2. Computer Fundamentals - Pradeep K. Sinha
                                                                            and Priti Sinha, BPB Publications.
                                                                            3. Introduction to Computers - Peter Norton,
                                                                            McGraw-Hill Education.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1103
                                                            |


                                                            Differential and Integral Calculus |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_3"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_3" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Differential and Integral Calculus
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Functions: Functions and their Graphs
                                                                            (Polynomial, Rational, Logarithmic,
                                                                            Exponential, Trigonometric, Hyperbolic
                                                                            Functions and Combination of such
                                                                            Functions
                                                                            Limits, Continuity and Differentiability:
                                                                            Concepts and Definitions, One Sided
                                                                            Limits, Limit at Infinity and Infinite
                                                                            Limits, Limit Laws, Sandwich Theorem,
                                                                            Continuous and Discontinuous Functions with
                                                                            Properties, Intermediate Value
                                                                            Theorem, One Sided Derivatives,
                                                                            Differentiability of Functions.
                                                                            Differentiation: Tangent Lines and Rates of
                                                                            Change, Techniques of
                                                                            Differentiation, Chain Rule, Derivatives of
                                                                            Various Functions, Successive
                                                                            Differentiation, Leibnitz Theorem, Related
                                                                            Rates, Indeterminate Forms,
                                                                            L’Hospital’s Rule.
                                                                            Applications of Differentiations: Analysis
                                                                            of Functions, Absolute Extrema,
                                                                            Applied Maximum and Minimum Problems,
                                                                            Rolle’s Theorem, Mean-Value Theorem.
                                                                            Integral Calculus:
                                                                            Integration: Indefinite Integral
                                                                            (Integration by Substitution, Integration by
                                                                            Parts, Standard Integrations, Integration by
                                                                            Successive Reduction), Definite
                                                                            Integrals, Fundamental Theorem of Calculus,
                                                                            Properties of Definite Integrals.
                                                                            Applications of Integration: Area between
                                                                            Two Curves, Volume of Solid by
                                                                            Slicing, Disk and Washers, Volume by
                                                                            Cylindrical Shells, Arc Length, Area of a
                                                                            Surface of Revolution. Improper Integrals:
                                                                            Different Types of Improper
                                                                            Integrals.
                                                                            Books Recommended:
                                                                            1. Calculus: Early Transcendentals - H.
                                                                            Anton and I. Bivens and S. Davis, Wiley.
                                                                            2. Calculus and Analytic Geometry - G. B.
                                                                            Thomas and R. L. Finney, Addison
                                                                            Wesley.
                                                                            3. Calculus: Early Transcendentals - J.
                                                                            Stewart, Thomson Brooks/Cole.
                                                                            4. Calculus - R.T. Smith and R. B. Minton,
                                                                            McGraw-Hill Education
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1104
                                                            |


                                                            Physics |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_4"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_4" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Physics
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Mechanics: Basic Concepts of Mechanics,
                                                                            Statics of Particles and Rigid Bodies,
                                                                            Newton’s Second Law of Motion, Principles of
                                                                            Work, Energy, System of Particles,
                                                                            Kinetics of Plane Motion of Rigid Bodies,
                                                                            Forces and Acceleration, Principles of
                                                                            Work and Energy, Law of Gravitation.
                                                                            Waves and Oscillations: Differential
                                                                            Equation of a Simple Harmonic Oscillator,
                                                                            Total Energy and Average Energy, Combination
                                                                            of Simple Harmonic Oscillations,
                                                                            Damped Oscillation, Determination of Damping
                                                                            Co-Efficient, Forced Oscillation,
                                                                            Resonance, Two-Body Oscillations, Reduced
                                                                            Mass, Laplace’s Correction, Doppler
                                                                            Effect, Newton’s Law of Velocity.
                                                                            Relativity: Michelson Morley’s Experiment,
                                                                            Galilean Transformation, Special
                                                                            Theory of Relativity, Lorentz-
                                                                            Transformation, Length Contraction, Time
                                                                            Dilation, Mass-Energy Relation.
                                                                            Radioactivity: Radioactive Decay, Half Life,
                                                                            Mean Life, Nuclear Binding Energy,
                                                                            Alpha, Beta, Gamma Decay, Photoelectric
                                                                            Effect.
                                                                            Books Recommended:
                                                                            1. Physics (Volume I and II) - Robert
                                                                            Resnick, David Halliday and Kenneth S.
                                                                            Krane, Wiley
                                                                            2. Fundamentals of Physics - David Halliday,
                                                                            Robert Resnick and Jearl Walker,
                                                                            Wiley
                                                                            3. Concepts of Modern Physics - Arthur
                                                                            Beiser and Shobhit Mahajan, McGraw Hill
                                                                            Education
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1105
                                                            |


                                                            Chemistry |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_5"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_5" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">

                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Chemistry
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Modern Concepts of Atomic Structure, Modern
                                                                            Periodic Table with Reference to
                                                                            Group Chemistry, Quantum Number, Dual Nature
                                                                            of Electron, Heisenberg Principle,
                                                                            Pauli Exclusion Principle, Electronic
                                                                            Configuration and Modem Concepts of
                                                                            Chemical Bonds, Properties and Molecular
                                                                            Structure, Oxidation Reduction
                                                                            Reaction, Modern Concepts of Acids and
                                                                            Bases, Different Types of Organic
                                                                            Reactions, Different Types of Solutions and
                                                                            their Compositions, Properties of
                                                                            Solutions, Phase Rule, Phase Diagram of
                                                                            Monocomponent Systems, Thermochemistry,
                                                                            Chemical Kinetics, Chemical Equilibrium,
                                                                            Electrical Properties of Solution and
                                                                            Electrochemical Cells, Spectrohotometry,
                                                                            Colorimeter.
                                                                            Books Recommended:
                                                                            1. Introductory Chemistry – John P. Sevenair
                                                                            and Allan R. Burkett, William C
                                                                            Brown Pub.
                                                                            2. General Chemistry – Darrell Ebbing and
                                                                            Steven D. Gammon, Brooks Cole.
                                                                            3. Physical Chemistry – Peter Atkins and
                                                                            Julio de Paula, OUP Oxford.
                                                                            4. Introduction to Modern Organic Chemistry
                                                                            – S.Z. Haider, Friends
                                                                            International.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1114
                                                            |


                                                            Physics Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_6"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_6" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">

                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Physics Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Practical Classes based on the Topics
                                                                            Covered in RME 1104.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1115
                                                            |


                                                            Chemistry Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_7"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_7" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close float-right"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Chemistry Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Practical Classes based on the Topics
                                                                            Covered in RME 1105.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1116
                                                            |


                                                            Engineering Drawing Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_8"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade mt-10" id="myModal_1_2_8" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Engineering Drawing Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Introduction to Mechanical Drawing,
                                                                            Introduction to Lettering, Numbering and
                                                                            Heading, Instrument and their Uses, First
                                                                            and Third Angle Projections,
                                                                            Orthographic Drawings, Missing Lines and
                                                                            Views, Sectional Views and Conventional
                                                                            Practices, Auxiliary Views, Pictorial
                                                                            Drawing- Isometric Views, Surface
                                                                            Development, Introduction to Computer Aided
                                                                            Drawing.
                                                                            Books Recommended:
                                                                            1. Engineering Drawing – M. B. Shah and B.
                                                                            C. Rana, Pearson Education.
                                                                            2. Machine Drawing – N. D. Junnarkar,
                                                                            Pearson Education.
                                                                            3. Machine Drawing with Auto CAD - Goutam
                                                                            Pohit, Pearson Education.
                                                                            4. Mechanical Engineering Drawing – Amalesh
                                                                            Chandra Mandal and Md. Quamrul
                                                                            Islam, DAERS (BUET).
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1117
                                                            |


                                                            Machine Shop and Workshop Practices Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_9"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_9" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Machine Shop and Workshop Practices Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Foundry: Introduction to Foundry, Tools and
                                                                            Equipment.
                                                                            Patterns: Function, Pattern Making.
                                                                            Molding: Molding Materials, Types of Mold,
                                                                            Procedure.
                                                                            Cores: Types, Core Making Materials, Metal
                                                                            Melting and Casting.
                                                                            Tools: Hand Tools, Power Tools, Safety Rules
                                                                            for Workshop Practices.
                                                                            Practices on Machine Tools: Lathe Machine,
                                                                            Drilling Machine, Shaper Machine,
                                                                            Milling Machine, Grinding Machine.
                                                                            Metal Joints: Riveting, Grooving, Soldering.
                                                                            Welding Practice: Electric Arch Welding,
                                                                            Spot Welding, Pressure Welding.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        First Year | 2nd Semester
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <ul>

                                                        <div class="title">
                                                            <i class="fas fa-file"></i> RME1101 | Fundamentals of
                                                            Mechanical Engineering | 3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_1"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_1" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Fundamentals of Mechanical Engineering
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Introduction: Scope of Mechanical
                                                                            Engineering, Study of Sources of Energy-
                                                                            Conventional and Renewable Energy.
                                                                            Thermodynamics: Fundamental Concepts and
                                                                            Laws, Thermodynamic Properties, Open
                                                                            and Closed Systems, Control Volumes,
                                                                            Thermodynamic Cycles, Reversibility and
                                                                            Irreversibility, Equation of State.
                                                                            Heat Transfer: Introduction to Heat
                                                                            Transfer, Modes of Heat Transfer, Steady and
                                                                            Unsteady State Heat Conduction, Convection
                                                                            Heat transfer - Natural and Forced
                                                                            Convection, Radiation Heat Transfer.
                                                                            Major Mechanical Applications: Introduction
                                                                            to Internal Combustion Engines and
                                                                            Their Cycles, Automobiles, Steam Generation
                                                                            Units with Accessories and
                                                                            Mountings, Fluid Machinery- Fan, Blower,
                                                                            Compressor and Pump (Classification and
                                                                            Working Principles), Study of Impulse and
                                                                            Reaction Turbines, Refrigeration and
                                                                            Air-conditioning Systems.
                                                                            Books Recommended:
                                                                            1. Engineering Thermodynamics – Michael J.
                                                                            Moran, Howard N. Shapiro, Daisie D.
                                                                            Boettner and Margaret B. Bailey, Wiley.
                                                                            2. Introduction to Thermodynamics and Heat
                                                                            Transfer - Yunus A. Cengel, McGraw
                                                                            Hill.
                                                                            3. Heat Engineering - V.P. Vasandani and
                                                                            D.S.Kumar, Metropolitan.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1102
                                                            |


                                                            Fundamentals of Computing |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_2"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_2" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Fundamentals of Computing
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Number System: Binary, Decimal, Hexadecimal,
                                                                            Octal number systems, Arithmetic in
                                                                            Different Number Systems.
                                                                            Combinatorial Logic: Logic Gates and Boolean
                                                                            Algebra, Combinational Circuits
                                                                            Design using Logic Gates, Minimization of
                                                                            Functions, Algebraic Simplification,
                                                                            The Karnaugh Map.
                                                                            Introduction to Computers: Components of a
                                                                            Computer System, Importance and
                                                                            Limitations of Computers, Classification of
                                                                            Computers, Computer Generations.
                                                                            Input and Output Devices: I/O Operations and
                                                                            Interfaces, Input Devices, Output
                                                                            Devices.
                                                                            Microprocessors: Functions of
                                                                            Microprocessors, Organization of a
                                                                            Microprocessor,
                                                                            Arithmetic Logic Unit, Control Unit.
                                                                            Memory Organization: Classification of
                                                                            Memory, Memory Hierarchies, Primary
                                                                            Memory, Secondary Memory, Comparisons of
                                                                            Primary Memory and Secondary Memory.
                                                                            Computer Software: Software, Classification
                                                                            of Software, Programming Languages,
                                                                            The Role of BIOS, Language Translators,
                                                                            Operating System, Tasks of an OS, Types
                                                                            of OS.
                                                                            Computer Networks and the Internet:
                                                                            Introduction to Computer Network, Network
                                                                            Terminologies, LAN Topology, Transmission
                                                                            Media, Communication Over Telephone
                                                                            Lines, Evolution of the Internet, Internet
                                                                            Services, Internet Address,
                                                                            Electronic Mail, The World Wide Web.
                                                                            IT Applications: Concepts and Applications
                                                                            of IT, Electronic Commerce, Access,
                                                                            Control, Security.
                                                                            Books Recommended:
                                                                            1. Digital Systems: Principles and
                                                                            Applications - Ronald Tocci, Neal Widmer and
                                                                            Greg Moss, Prentice Hall.
                                                                            2. Computer Fundamentals - Pradeep K. Sinha
                                                                            and Priti Sinha, BPB Publications.
                                                                            3. Introduction to Computers - Peter Norton,
                                                                            McGraw-Hill Education.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1103
                                                            |


                                                            Differential and Integral Calculus |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_3"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_3" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Differential and Integral Calculus
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Functions: Functions and their Graphs
                                                                            (Polynomial, Rational, Logarithmic,
                                                                            Exponential, Trigonometric, Hyperbolic
                                                                            Functions and Combination of such
                                                                            Functions
                                                                            Limits, Continuity and Differentiability:
                                                                            Concepts and Definitions, One Sided
                                                                            Limits, Limit at Infinity and Infinite
                                                                            Limits, Limit Laws, Sandwich Theorem,
                                                                            Continuous and Discontinuous Functions with
                                                                            Properties, Intermediate Value
                                                                            Theorem, One Sided Derivatives,
                                                                            Differentiability of Functions.
                                                                            Differentiation: Tangent Lines and Rates of
                                                                            Change, Techniques of
                                                                            Differentiation, Chain Rule, Derivatives of
                                                                            Various Functions, Successive
                                                                            Differentiation, Leibnitz Theorem, Related
                                                                            Rates, Indeterminate Forms,
                                                                            L’Hospital’s Rule.
                                                                            Applications of Differentiations: Analysis
                                                                            of Functions, Absolute Extrema,
                                                                            Applied Maximum and Minimum Problems,
                                                                            Rolle’s Theorem, Mean-Value Theorem.
                                                                            Integral Calculus:
                                                                            Integration: Indefinite Integral
                                                                            (Integration by Substitution, Integration by
                                                                            Parts, Standard Integrations, Integration by
                                                                            Successive Reduction), Definite
                                                                            Integrals, Fundamental Theorem of Calculus,
                                                                            Properties of Definite Integrals.
                                                                            Applications of Integration: Area between
                                                                            Two Curves, Volume of Solid by
                                                                            Slicing, Disk and Washers, Volume by
                                                                            Cylindrical Shells, Arc Length, Area of a
                                                                            Surface of Revolution. Improper Integrals:
                                                                            Different Types of Improper
                                                                            Integrals.
                                                                            Books Recommended:
                                                                            1. Calculus: Early Transcendentals - H.
                                                                            Anton and I. Bivens and S. Davis, Wiley.
                                                                            2. Calculus and Analytic Geometry - G. B.
                                                                            Thomas and R. L. Finney, Addison
                                                                            Wesley.
                                                                            3. Calculus: Early Transcendentals - J.
                                                                            Stewart, Thomson Brooks/Cole.
                                                                            4. Calculus - R.T. Smith and R. B. Minton,
                                                                            McGraw-Hill Education
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1104
                                                            |


                                                            Physics |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_4"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_4" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Physics
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Mechanics: Basic Concepts of Mechanics,
                                                                            Statics of Particles and Rigid Bodies,
                                                                            Newton’s Second Law of Motion, Principles of
                                                                            Work, Energy, System of Particles,
                                                                            Kinetics of Plane Motion of Rigid Bodies,
                                                                            Forces and Acceleration, Principles of
                                                                            Work and Energy, Law of Gravitation.
                                                                            Waves and Oscillations: Differential
                                                                            Equation of a Simple Harmonic Oscillator,
                                                                            Total Energy and Average Energy, Combination
                                                                            of Simple Harmonic Oscillations,
                                                                            Damped Oscillation, Determination of Damping
                                                                            Co-Efficient, Forced Oscillation,
                                                                            Resonance, Two-Body Oscillations, Reduced
                                                                            Mass, Laplace’s Correction, Doppler
                                                                            Effect, Newton’s Law of Velocity.
                                                                            Relativity: Michelson Morley’s Experiment,
                                                                            Galilean Transformation, Special
                                                                            Theory of Relativity, Lorentz-
                                                                            Transformation, Length Contraction, Time
                                                                            Dilation, Mass-Energy Relation.
                                                                            Radioactivity: Radioactive Decay, Half Life,
                                                                            Mean Life, Nuclear Binding Energy,
                                                                            Alpha, Beta, Gamma Decay, Photoelectric
                                                                            Effect.
                                                                            Books Recommended:
                                                                            1. Physics (Volume I and II) - Robert
                                                                            Resnick, David Halliday and Kenneth S.
                                                                            Krane, Wiley
                                                                            2. Fundamentals of Physics - David Halliday,
                                                                            Robert Resnick and Jearl Walker,
                                                                            Wiley
                                                                            3. Concepts of Modern Physics - Arthur
                                                                            Beiser and Shobhit Mahajan, McGraw Hill
                                                                            Education
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1105
                                                            |


                                                            Chemistry |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_5"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_5" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">

                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Chemistry
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Modern Concepts of Atomic Structure, Modern
                                                                            Periodic Table with Reference to
                                                                            Group Chemistry, Quantum Number, Dual Nature
                                                                            of Electron, Heisenberg Principle,
                                                                            Pauli Exclusion Principle, Electronic
                                                                            Configuration and Modem Concepts of
                                                                            Chemical Bonds, Properties and Molecular
                                                                            Structure, Oxidation Reduction
                                                                            Reaction, Modern Concepts of Acids and
                                                                            Bases, Different Types of Organic
                                                                            Reactions, Different Types of Solutions and
                                                                            their Compositions, Properties of
                                                                            Solutions, Phase Rule, Phase Diagram of
                                                                            Monocomponent Systems, Thermochemistry,
                                                                            Chemical Kinetics, Chemical Equilibrium,
                                                                            Electrical Properties of Solution and
                                                                            Electrochemical Cells, Spectrohotometry,
                                                                            Colorimeter.
                                                                            Books Recommended:
                                                                            1. Introductory Chemistry – John P. Sevenair
                                                                            and Allan R. Burkett, William C
                                                                            Brown Pub.
                                                                            2. General Chemistry – Darrell Ebbing and
                                                                            Steven D. Gammon, Brooks Cole.
                                                                            3. Physical Chemistry – Peter Atkins and
                                                                            Julio de Paula, OUP Oxford.
                                                                            4. Introduction to Modern Organic Chemistry
                                                                            – S.Z. Haider, Friends
                                                                            International.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1114
                                                            |


                                                            Physics Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_6"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_6" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">

                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Physics Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Practical Classes based on the Topics
                                                                            Covered in RME 1104.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1115
                                                            |


                                                            Chemistry Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_7"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_7" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close float-right"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Chemistry Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Practical Classes based on the Topics
                                                                            Covered in RME 1105.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1116
                                                            |


                                                            Engineering Drawing Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_8"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade mt-10" id="myModal_1_2_8" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Engineering Drawing Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Introduction to Mechanical Drawing,
                                                                            Introduction to Lettering, Numbering and
                                                                            Heading, Instrument and their Uses, First
                                                                            and Third Angle Projections,
                                                                            Orthographic Drawings, Missing Lines and
                                                                            Views, Sectional Views and Conventional
                                                                            Practices, Auxiliary Views, Pictorial
                                                                            Drawing- Isometric Views, Surface
                                                                            Development, Introduction to Computer Aided
                                                                            Drawing.
                                                                            Books Recommended:
                                                                            1. Engineering Drawing – M. B. Shah and B.
                                                                            C. Rana, Pearson Education.
                                                                            2. Machine Drawing – N. D. Junnarkar,
                                                                            Pearson Education.
                                                                            3. Machine Drawing with Auto CAD - Goutam
                                                                            Pohit, Pearson Education.
                                                                            4. Mechanical Engineering Drawing – Amalesh
                                                                            Chandra Mandal and Md. Quamrul
                                                                            Islam, DAERS (BUET).
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1117
                                                            |


                                                            Machine Shop and Workshop Practices Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_9"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_9" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Machine Shop and Workshop Practices Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Foundry: Introduction to Foundry, Tools and
                                                                            Equipment.
                                                                            Patterns: Function, Pattern Making.
                                                                            Molding: Molding Materials, Types of Mold,
                                                                            Procedure.
                                                                            Cores: Types, Core Making Materials, Metal
                                                                            Melting and Casting.
                                                                            Tools: Hand Tools, Power Tools, Safety Rules
                                                                            for Workshop Practices.
                                                                            Practices on Machine Tools: Lathe Machine,
                                                                            Drilling Machine, Shaper Machine,
                                                                            Milling Machine, Grinding Machine.
                                                                            Metal Joints: Riveting, Grooving, Soldering.
                                                                            Welding Practice: Electric Arch Welding,
                                                                            Spot Welding, Pressure Welding.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <ul>

                                                        <div class="title">
                                                            <i class="fas fa-file"></i> RME1101 | Fundamentals of
                                                            Mechanical Engineering | 3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_1"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_1" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Fundamentals of Mechanical Engineering
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Introduction: Scope of Mechanical
                                                                            Engineering, Study of Sources of Energy-
                                                                            Conventional and Renewable Energy.
                                                                            Thermodynamics: Fundamental Concepts and
                                                                            Laws, Thermodynamic Properties, Open
                                                                            and Closed Systems, Control Volumes,
                                                                            Thermodynamic Cycles, Reversibility and
                                                                            Irreversibility, Equation of State.
                                                                            Heat Transfer: Introduction to Heat
                                                                            Transfer, Modes of Heat Transfer, Steady and
                                                                            Unsteady State Heat Conduction, Convection
                                                                            Heat transfer - Natural and Forced
                                                                            Convection, Radiation Heat Transfer.
                                                                            Major Mechanical Applications: Introduction
                                                                            to Internal Combustion Engines and
                                                                            Their Cycles, Automobiles, Steam Generation
                                                                            Units with Accessories and
                                                                            Mountings, Fluid Machinery- Fan, Blower,
                                                                            Compressor and Pump (Classification and
                                                                            Working Principles), Study of Impulse and
                                                                            Reaction Turbines, Refrigeration and
                                                                            Air-conditioning Systems.
                                                                            Books Recommended:
                                                                            1. Engineering Thermodynamics – Michael J.
                                                                            Moran, Howard N. Shapiro, Daisie D.
                                                                            Boettner and Margaret B. Bailey, Wiley.
                                                                            2. Introduction to Thermodynamics and Heat
                                                                            Transfer - Yunus A. Cengel, McGraw
                                                                            Hill.
                                                                            3. Heat Engineering - V.P. Vasandani and
                                                                            D.S.Kumar, Metropolitan.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1102
                                                            |


                                                            Fundamentals of Computing |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_2"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_2" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Fundamentals of Computing
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Number System: Binary, Decimal, Hexadecimal,
                                                                            Octal number systems, Arithmetic in
                                                                            Different Number Systems.
                                                                            Combinatorial Logic: Logic Gates and Boolean
                                                                            Algebra, Combinational Circuits
                                                                            Design using Logic Gates, Minimization of
                                                                            Functions, Algebraic Simplification,
                                                                            The Karnaugh Map.
                                                                            Introduction to Computers: Components of a
                                                                            Computer System, Importance and
                                                                            Limitations of Computers, Classification of
                                                                            Computers, Computer Generations.
                                                                            Input and Output Devices: I/O Operations and
                                                                            Interfaces, Input Devices, Output
                                                                            Devices.
                                                                            Microprocessors: Functions of
                                                                            Microprocessors, Organization of a
                                                                            Microprocessor,
                                                                            Arithmetic Logic Unit, Control Unit.
                                                                            Memory Organization: Classification of
                                                                            Memory, Memory Hierarchies, Primary
                                                                            Memory, Secondary Memory, Comparisons of
                                                                            Primary Memory and Secondary Memory.
                                                                            Computer Software: Software, Classification
                                                                            of Software, Programming Languages,
                                                                            The Role of BIOS, Language Translators,
                                                                            Operating System, Tasks of an OS, Types
                                                                            of OS.
                                                                            Computer Networks and the Internet:
                                                                            Introduction to Computer Network, Network
                                                                            Terminologies, LAN Topology, Transmission
                                                                            Media, Communication Over Telephone
                                                                            Lines, Evolution of the Internet, Internet
                                                                            Services, Internet Address,
                                                                            Electronic Mail, The World Wide Web.
                                                                            IT Applications: Concepts and Applications
                                                                            of IT, Electronic Commerce, Access,
                                                                            Control, Security.
                                                                            Books Recommended:
                                                                            1. Digital Systems: Principles and
                                                                            Applications - Ronald Tocci, Neal Widmer and
                                                                            Greg Moss, Prentice Hall.
                                                                            2. Computer Fundamentals - Pradeep K. Sinha
                                                                            and Priti Sinha, BPB Publications.
                                                                            3. Introduction to Computers - Peter Norton,
                                                                            McGraw-Hill Education.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1103
                                                            |


                                                            Differential and Integral Calculus |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_3"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_3" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Differential and Integral Calculus
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Functions: Functions and their Graphs
                                                                            (Polynomial, Rational, Logarithmic,
                                                                            Exponential, Trigonometric, Hyperbolic
                                                                            Functions and Combination of such
                                                                            Functions
                                                                            Limits, Continuity and Differentiability:
                                                                            Concepts and Definitions, One Sided
                                                                            Limits, Limit at Infinity and Infinite
                                                                            Limits, Limit Laws, Sandwich Theorem,
                                                                            Continuous and Discontinuous Functions with
                                                                            Properties, Intermediate Value
                                                                            Theorem, One Sided Derivatives,
                                                                            Differentiability of Functions.
                                                                            Differentiation: Tangent Lines and Rates of
                                                                            Change, Techniques of
                                                                            Differentiation, Chain Rule, Derivatives of
                                                                            Various Functions, Successive
                                                                            Differentiation, Leibnitz Theorem, Related
                                                                            Rates, Indeterminate Forms,
                                                                            L’Hospital’s Rule.
                                                                            Applications of Differentiations: Analysis
                                                                            of Functions, Absolute Extrema,
                                                                            Applied Maximum and Minimum Problems,
                                                                            Rolle’s Theorem, Mean-Value Theorem.
                                                                            Integral Calculus:
                                                                            Integration: Indefinite Integral
                                                                            (Integration by Substitution, Integration by
                                                                            Parts, Standard Integrations, Integration by
                                                                            Successive Reduction), Definite
                                                                            Integrals, Fundamental Theorem of Calculus,
                                                                            Properties of Definite Integrals.
                                                                            Applications of Integration: Area between
                                                                            Two Curves, Volume of Solid by
                                                                            Slicing, Disk and Washers, Volume by
                                                                            Cylindrical Shells, Arc Length, Area of a
                                                                            Surface of Revolution. Improper Integrals:
                                                                            Different Types of Improper
                                                                            Integrals.
                                                                            Books Recommended:
                                                                            1. Calculus: Early Transcendentals - H.
                                                                            Anton and I. Bivens and S. Davis, Wiley.
                                                                            2. Calculus and Analytic Geometry - G. B.
                                                                            Thomas and R. L. Finney, Addison
                                                                            Wesley.
                                                                            3. Calculus: Early Transcendentals - J.
                                                                            Stewart, Thomson Brooks/Cole.
                                                                            4. Calculus - R.T. Smith and R. B. Minton,
                                                                            McGraw-Hill Education
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1104
                                                            |


                                                            Physics |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_4"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_4" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Physics
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Mechanics: Basic Concepts of Mechanics,
                                                                            Statics of Particles and Rigid Bodies,
                                                                            Newton’s Second Law of Motion, Principles of
                                                                            Work, Energy, System of Particles,
                                                                            Kinetics of Plane Motion of Rigid Bodies,
                                                                            Forces and Acceleration, Principles of
                                                                            Work and Energy, Law of Gravitation.
                                                                            Waves and Oscillations: Differential
                                                                            Equation of a Simple Harmonic Oscillator,
                                                                            Total Energy and Average Energy, Combination
                                                                            of Simple Harmonic Oscillations,
                                                                            Damped Oscillation, Determination of Damping
                                                                            Co-Efficient, Forced Oscillation,
                                                                            Resonance, Two-Body Oscillations, Reduced
                                                                            Mass, Laplace’s Correction, Doppler
                                                                            Effect, Newton’s Law of Velocity.
                                                                            Relativity: Michelson Morley’s Experiment,
                                                                            Galilean Transformation, Special
                                                                            Theory of Relativity, Lorentz-
                                                                            Transformation, Length Contraction, Time
                                                                            Dilation, Mass-Energy Relation.
                                                                            Radioactivity: Radioactive Decay, Half Life,
                                                                            Mean Life, Nuclear Binding Energy,
                                                                            Alpha, Beta, Gamma Decay, Photoelectric
                                                                            Effect.
                                                                            Books Recommended:
                                                                            1. Physics (Volume I and II) - Robert
                                                                            Resnick, David Halliday and Kenneth S.
                                                                            Krane, Wiley
                                                                            2. Fundamentals of Physics - David Halliday,
                                                                            Robert Resnick and Jearl Walker,
                                                                            Wiley
                                                                            3. Concepts of Modern Physics - Arthur
                                                                            Beiser and Shobhit Mahajan, McGraw Hill
                                                                            Education
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1105
                                                            |


                                                            Chemistry |


                                                            3
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_5"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_5" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">

                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Chemistry
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            3
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Modern Concepts of Atomic Structure, Modern
                                                                            Periodic Table with Reference to
                                                                            Group Chemistry, Quantum Number, Dual Nature
                                                                            of Electron, Heisenberg Principle,
                                                                            Pauli Exclusion Principle, Electronic
                                                                            Configuration and Modem Concepts of
                                                                            Chemical Bonds, Properties and Molecular
                                                                            Structure, Oxidation Reduction
                                                                            Reaction, Modern Concepts of Acids and
                                                                            Bases, Different Types of Organic
                                                                            Reactions, Different Types of Solutions and
                                                                            their Compositions, Properties of
                                                                            Solutions, Phase Rule, Phase Diagram of
                                                                            Monocomponent Systems, Thermochemistry,
                                                                            Chemical Kinetics, Chemical Equilibrium,
                                                                            Electrical Properties of Solution and
                                                                            Electrochemical Cells, Spectrohotometry,
                                                                            Colorimeter.
                                                                            Books Recommended:
                                                                            1. Introductory Chemistry – John P. Sevenair
                                                                            and Allan R. Burkett, William C
                                                                            Brown Pub.
                                                                            2. General Chemistry – Darrell Ebbing and
                                                                            Steven D. Gammon, Brooks Cole.
                                                                            3. Physical Chemistry – Peter Atkins and
                                                                            Julio de Paula, OUP Oxford.
                                                                            4. Introduction to Modern Organic Chemistry
                                                                            – S.Z. Haider, Friends
                                                                            International.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1114
                                                            |


                                                            Physics Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_6"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_6" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">

                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Physics Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Practical Classes based on the Topics
                                                                            Covered in RME 1104.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1115
                                                            |


                                                            Chemistry Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_7"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_7" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close float-right"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Chemistry Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Practical Classes based on the Topics
                                                                            Covered in RME 1105.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1116
                                                            |


                                                            Engineering Drawing Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_8"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade mt-10" id="myModal_1_2_8" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Engineering Drawing Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Introduction to Mechanical Drawing,
                                                                            Introduction to Lettering, Numbering and
                                                                            Heading, Instrument and their Uses, First
                                                                            and Third Angle Projections,
                                                                            Orthographic Drawings, Missing Lines and
                                                                            Views, Sectional Views and Conventional
                                                                            Practices, Auxiliary Views, Pictorial
                                                                            Drawing- Isometric Views, Surface
                                                                            Development, Introduction to Computer Aided
                                                                            Drawing.
                                                                            Books Recommended:
                                                                            1. Engineering Drawing – M. B. Shah and B.
                                                                            C. Rana, Pearson Education.
                                                                            2. Machine Drawing – N. D. Junnarkar,
                                                                            Pearson Education.
                                                                            3. Machine Drawing with Auto CAD - Goutam
                                                                            Pohit, Pearson Education.
                                                                            4. Mechanical Engineering Drawing – Amalesh
                                                                            Chandra Mandal and Md. Quamrul
                                                                            Islam, DAERS (BUET).
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="title">
                                                            <i class="fas fa-file"></i>

                                                            RME1117
                                                            |


                                                            Machine Shop and Workshop Practices Lab |


                                                            2
                                                            Cr.
                                                            <a data-toggle="modal" data-target="#myModal_1_2_9"
                                                                href="#"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>Preview</a>

                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_1_2_9" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header"
                                                                        style="background: #1C4370">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel"
                                                                            style="color: white">Course Title:
                                                                            Machine Shop and Workshop Practices Lab
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Course Credit:
                                                                            2
                                                                        </p>
                                                                        <br>
                                                                        <p>
                                                                            Foundry: Introduction to Foundry, Tools and
                                                                            Equipment.
                                                                            Patterns: Function, Pattern Making.
                                                                            Molding: Molding Materials, Types of Mold,
                                                                            Procedure.
                                                                            Cores: Types, Core Making Materials, Metal
                                                                            Melting and Casting.
                                                                            Tools: Hand Tools, Power Tools, Safety Rules
                                                                            for Workshop Practices.
                                                                            Practices on Machine Tools: Lathe Machine,
                                                                            Drilling Machine, Shaper Machine,
                                                                            Milling Machine, Grinding Machine.
                                                                            Metal Joints: Riveting, Grooving, Soldering.
                                                                            Welding Practice: Electric Arch Welding,
                                                                            Spot Welding, Pressure Welding.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="card-body">
                                    <ul>
                                        <li><i class="fa fa-link"></i> <a href="#">Lorem ipsum dolor sit amet
                                                consectetur, adipisicing elit.</a></li>
                                        <li><i class="fa fa-link"></i> <a href="#">Voluptate doloribus natus ullam non,
                                                autem illo! Eos alia</a></li>
                                        <li><i class="fa fa-link"></i> <a href="#">Harum architecto corporis pariatur
                                                debitis similique ipsa</a> </li>
                                        <li><i class="fa fa-link"></i> <a href="#">Velit quidem dolorum itaque iste</a>
                                        </li>
                                        <li><i class="fa fa-link"></i> <a href="#">Ab dolorem, odit, corporisipsa
                                                commodi.</a></li>
                                    </ul>
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
