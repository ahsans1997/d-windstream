@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="header">
                    <h2>Event</h2>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('delete') }}
                    </div>
                @endif
                <div class="table mt-5">
                    <table class="table table-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Department</th>
                                <th scope="col">Venue</th>
                                <th scope="col">Organization</th>
                                <th scope="col">Price</th>
                                <th scope="col">Registration Start</th>
                                <th scope="col">Registration End</th>
                                <th scope="col">Event Date TIme</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($events as $event)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td class="text-wrap">{{ $event->title }}</td>
                                    <td class="text-wrap">{{ $event->description }}</td>
                                    <td class="text-wrap">{{ $event->department->name }}</td>
                                    <td class="text-wrap">{{ $event->venue }}</td>
                                    <td class="text-wrap">{{ $event->price }}</td>
                                    <td class="text-wrap">{{ $event->organization }}</td>
                                    <td class="text-wrap">{{ $event->registration_start }}</td>
                                    <td class="text-wrap">{{ $event->registration_end }}</td>
                                    <td class="text-wrap">{{ $event->datetime }}</td>
                                    <td>
                                        <img src="{{ asset('/') }}assets/uploads/events/{{ $event->image }}" class="img-fluid" alt="" style="width: 100px">
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('event.edit',$event->id) }}" class="btn btn-success btn-sm waves-effect waves-light"><i class="ri-edit-2-fill"></i></a>
                                            <form action="{{ route('event.destroy',$event->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-danger text-center" colspan="50">No More Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div> <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
