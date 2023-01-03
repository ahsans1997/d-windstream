@extends('layouts.frontend')

@section('content')
    <div class="main-div">
        <div class="container">
            <div class="row mb-5">             

                <div class="card" style="width:100%">
                    <div class="card-header">
                        <h3>{{$page->title}}</h3>
                    </div>
                    <div class="card-body"> 
                        @if($page->file) 
                            <div class="border p-2">Download File: <a href="{{asset('storage/page/'.$page->file)}}"><i class="fa fa-download"></i> {{$page->file}}</a></div>
                            <hr>
                        @endif

                        @if($page->image)
                            <img src="{{asset('storage/page/'.$page->image)}}" class="img-fluid" alt="{{$page->title}}">
                            <hr>
                        @endif
                        {!! $page->description !!}
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
@endsection
