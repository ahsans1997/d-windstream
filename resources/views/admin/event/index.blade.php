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
                                    <td class="text-wrap {{ (!$event->venue) ? 'text-danger' : '' }}">{{ ($event->venue) ? $event->venue : 'Null' }}</td>
                                    <td class="text-wrap {{ (!$event->organization) ? 'text-danger' : '' }}">{{ ($event->organization) ? $event->organization : 'Null' }}</td>
                                    <td class="text-wrap {{ (!$event->price) ? 'text-danger' : '' }}">{{ ($event->price) ? $event->price : 'Null' }}</td>
                                    <td class="text-wrap {{ (!$event->registration_start) ? 'text-danger' : '' }}">{{ ($event->registration_start) ? $event->registration_start : 'Null' }}</td>
                                    <td class="text-wrap {{ (!$event->registration_end) ? 'text-danger' : '' }}">{{ ($event->registration_end) ? $event->registration_end : 'Null' }}</td>
                                    <td class="text-wrap">{{  date('d,M Y', strtotime($event->datetime)) }}<br>{{ date('h:i A', strtotime($event->datetime)) }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            @if ($event->featured == 1)
                                                    <a href="{{ route('event.featured',$event->id) }}" class="btn btn-outline-success btn-icon waves-effect waves-light btn-sm"><i class="ri-eye-fill"></i></a>
                                                @else
                                                    <a href="{{ route('event.featured',$event->id) }}" class="btn btn-outline-danger btn-icon waves-effect waves-light btn-sm"><i class="ri-eye-off-fill"></i></a>
                                                @endif
                                            <a href="{{ route('event.edit',$event->id) }}" class="btn btn-outline-primary btn-icon waves-effect waves-light btn-sm"><i class="ri-edit-2-fill"></i></a>
                                            <form action="{{ route('event.destroy',$event->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-icon waves-effect waves-light btn-sm"><i class="ri-delete-bin-5-line"></i></button>
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
                <div class="row">
                    {{ $events->links() }}
                </div>
            </div> <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

