@extends('layouts.frontend')

@section('content')
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Search</h2>
                <hr>
                <form action="">
                    <input class="form-control" type="text" placeholder="Notice" name="" id="">
                    <button class="btn btn-info mt-2" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 75%;">Title</th>
                            <th style="width: 25%;">Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="">Notice Title </a></td>
                            <td>Super Admin</td>
                        </tr>
                        <tr>
                            <td><a href="">Notice Title</a></td>
                            <td>Super Admin</td>
                        </tr>
                        <tr>
                            <td><a href="">Notice Title</a></td>
                            <td>Super Admin</td>
                        </tr>
                        <tr>
                            <td><a href="">Notice Title</a></td>
                            <td>Super Admin</td>
                        </tr>
                        <tr>
                            <td><a href="">Notice Title</a></td>
                            <td>Super Admin</td>
                        </tr>
                        <tr>
                            <td><a href="">Notice Title</a></td>
                            <td>Super Admin</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


