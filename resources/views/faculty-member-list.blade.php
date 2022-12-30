@extends('layouts.frontend')

@section('content')
    <div class="container mt-5">
        <div class="row">

            @forelse ($faculty_members as $member)
                <div class="col-sm-4">
                    <x-faculty-profile name="{{ $member->name }}" designation="{{ $member->designation }}"
                        image="{{ !empty($member->image) ? 'storage/facultyMember/' . $member->image : '' }}"
                        url="{{ route('member-profile', $member->slug) }}">
                    </x-faculty-profile>
                </div>
            @empty

                <div class="col-sm-12">
                    <h2 class="alert alert-warning text-center">No Member Found..</h2>
                </div>
            @endforelse





        </div>
    </div>
@endsection
