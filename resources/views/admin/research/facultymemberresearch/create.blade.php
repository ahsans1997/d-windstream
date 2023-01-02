@extends('layouts.app')

@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="news-header">
                        <h2>Create Faculty Member Research</h2>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="news-form mt-3">
                        <div class="row">
                            <form action="{{ route('faculty-member-research.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">Subject*</label>
                                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Title*</label>
                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Title" name="title">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">Source of Fund</label>
                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Source of Fund" name="source_of_fund">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">From Date</label>
                                        <input type="date" class="form-control" name="form_date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">To Date</label>
                                        <input type="date" class="form-control" name="to_date">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-2">
                                        <label for="placeholderInput" class="form-label">Faculty Member*</label>
                                        <select class="form-select userselect2 mb-3" aria-label=".form-select-lg example" name="department_id">
                                            <option selected value="">Open this select menu</option>
                                            @foreach ($faculty_members as $faculty_member)
                                                <option value="{{ $faculty_member->id }}">{{ $faculty_member->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="card mt-3">
                                        <div class="card-header">Meta Tag</div>
                                        <div class="card-body">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Meta Keyword Comma(,) Separated</label>
                                            <input type="text" class="form-control" id="placeholderInput" placeholder=" Meta KeyWord" name="meta_keywords">
                                        </div>
                                        <div class="mt-2">
                                            <label for="placeholderInput" class="form-label">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" placeholder=" Meta Description" rows="3"></textarea>
                                        </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-outline-success waves-effect waves-light mt-3 mb-5">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->





@endsection


@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.userselect2').select2();
        });
    </script>
@endpush
