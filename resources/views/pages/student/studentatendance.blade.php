@extends('layouts/master',['title'=>'Attendance'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Attendance</h4></div>
                <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>course Id</th>
                                    <th>23/01/2020</th>
                                    <th>24/01/2020</th>
                                    <th>25/01/2020</th>
                                    <th>23/02/2020</th>
                                    <th>23/05/2020</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CSE 2312</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                     <td>1</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection