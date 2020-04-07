@extends('layouts/master',['title'=>'Attendance Details'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_teachersidebar')
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header"><h4>Attendance Details</h4></div>
                <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Student Id</th>
                                    <th>23/01/2020</th>
                                    <th>24/01/2020</th>
                                    <th>25/01/2020</th>
                                    <th>23/02/2020</th>
                                    <th>23/05/2020</th>
                                    <th>25/01/2020</th>
                                    <th>23/02/2020</th>
                                    <th>23/05/2020</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>16004001</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                     <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0</td>
                                </tr>
                                   <tr>
                                    <td>16004002</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                     <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                   <tr>
                                    <td>16004003</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                     <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0</td>
                                       <tr>
                                    <td>16004004</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                     <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0</td>
                                </tr>
                                </tr>
                                
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection