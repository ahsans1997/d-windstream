@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row mb-5">             

                <div class="card" style="width:100%">
                    <div class="card-header">
                        <h3>{{$page->title ?? ''}}</h3>
                    </div>
                    <div class="card-body text-center"> 
                        Ops!! You Don't have permission to view this page...
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
@endsection
