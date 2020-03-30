@extends('layouts/master',['title'=>'Attendance'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header"><h4>Attendance</h4></div>
                <div class="card-body">
                    <form class="">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Student Id</th>
                                    <th>Presence</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <div class="form-group">
                                        <td><label for="email">160040022 :</label></td>
                                        <td><input type="number" class="form-control" id="email" placeholder="Enter email" name="email"></td>
                                    </div>
                                </tr>
                                 <tr>
                                    <div class="form-group">
                                        <td><label for="email">160040023 :</label></td>
                                        <td><input type="number" class="form-control" id="email" placeholder="Enter email" name="email"></td>
                                    </div>
                                </tr>
                                 <tr>
                                    <div class="form-group">
                                        <td><label for="email">160040024 :</label></td>
                                        <td><input type="number" class="form-control" id="email" placeholder="Enter email" name="email"></td>
                                    </div>
                                </tr>
                                 <tr>
                                    <div class="form-group">
                                        <td><label for="email">160040025 :</label></td>
                                        <td><input type="number" class="form-control" id="email" placeholder="Enter email" name="email"></td>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection