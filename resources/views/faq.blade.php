@extends('layouts.frontend')

@section('content')
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="accordion mb-4" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link button" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    General
                                </button>
                                <button class="btn btn-link button plus" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa-solid fa-circle-plus"></i>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse question show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                @foreach ($general as $g)
                                    <h4>Q : {{ $g->question }}</h4>
                                    <p>Ans : {!! $g->answer !!}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Undergraduate
                                </button>
                                <button class="btn btn-link collapsed button plus" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa-solid fa-circle-plus"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse question" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                @foreach ($undergraduate as $u)
                                    <h4>Q : {{ $u->question }}</h4>
                                    <p>Ans : {!! $u->answer !!}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Postgraduate
                                </button>
                                <button class="btn btn-link collapsed button plus" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa-solid fa-circle-plus"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse question" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                @foreach ($postgraduate as $p)
                                    <h4>Q : {{ $p->question }}</h4>
                                    <p>Ans : {!! $p->answer !!}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button" type="button" data-toggle="collapse"
                                    data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Certificates & Documents Related
                                </button>
                                <button class="btn btn-link collapsed button plus" type="button" data-toggle="collapse"
                                    data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <i class="fa-solid fa-circle-plus"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapsefour" class="collapse question" aria-labelledby="headingfour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                @foreach ($certificates as $c)
                                    <h4>Q : {{ $c->question }}</h4>
                                    <p>Ans : {!! $c->answer !!}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed button" type="button" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Library
                                </button>
                                <button class="btn btn-link collapsed button plus" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa-solid fa-circle-plus"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse question" aria-labelledby="headingFive"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                @foreach ($library as $l)
                                    <h4>Q : {{ $l->question }}</h4>
                                    <p>Ans : {!! $l->answer !!}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<style>
    .button {
        color: #000;
        font-size: 20px;
        font-weight: 600;
    }

    .button:hover {
        color: #000;
        font-size: 20px;
        font-weight: 600;
        text-decoration: none;
    }

    .plus {
        color: #000;
        font-size: 20px;
        font-weight: 600;
        float: right;
    }
    .question h4{
        color: green;
    }

</style>


@endpush
