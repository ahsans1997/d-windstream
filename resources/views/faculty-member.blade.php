@extends('layouts.frontend')

@section('content')
    <div class="container mt-5">
        <div class="row">

            @foreach ($faculty_members as $member)
                <div class="col-sm-4">
                    <x-faculty-profile name="{{$member->name}}" designation="{{$member->designation}}"
                        image="{{$member->image}}" url="{{$member->slug}}">
                    </x-faculty-profile>
                </div>
            @endforeach





        </div>
    </div>
@endsection
