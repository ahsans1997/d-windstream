@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="header">
                        <h2>Admission</h2>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>department</th>
                                <th>Admission Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admissions as $admission)
                                <tr>
                                    <td>{{ $admission->title }}</td>
                                    <td>{{ $admission->department->name }}</td>
                                    <td>{{ $admission->admission_type }}</td>
                                    <td>
                                        <a href="{{ route('admission.edit', $admission->id) }}" class="btn btn-outline-primary waves-effect waves-light">Edit</a>
                                        <form action="{{ route('admission.destroy', $admission->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger waves-effect waves-light">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="row">
                {{ $admissions->links() }}
            </div>
        </div>
    </div>
@endsection
