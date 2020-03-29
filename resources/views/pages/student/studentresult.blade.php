@extends('layouts/master',['title'=>'Stdent Result'])
@section('content')
<br><br><br><br><br><br><br>
<div class="container mt-3">
    <div class="row">
        @include('layouts/partials/_studentsidebar')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header"><h4>Stdent Result</h4></div>
                <div class="card-body stdent_result">
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Course No</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CSE 4104</td>
                                <td>eNGINEERING Drawing Lab</td>
                                <td>0.75</td>
                                <td>A+</td>
                            </tr>
                            <tr>
                                <td>CSE 4104</td>
                                <td>eNGINEERING Drawing Lab</td>
                                <td>0.75</td>
                                <td>A+</td>
                            </tr>
                            <tr>
                                <td>CSE 4104</td>
                                <td>eNGINEERING Drawing Lab</td>
                                <td>0.75</td>
                                <td>A+</td>
                            </tr>
                            <tr>
                                <td>CSE 4104</td>
                                <td>eNGINEERING Drawing Lab</td>
                                <td>0.75</td>
                                <td>A+</td>
                            </tr>
                            <tr>
                                <td>CSE 4104</td>
                                <td>eNGINEERING Drawing Lab</td>
                                <td>0.75</td>
                                <td>A+</td>
                            </tr>
                            <tr>
                                <td>CSE 4104</td>
                                <td>eNGINEERING Drawing Lab</td>
                                <td>0.75</td>
                                <td>A+</td>
                            </tr>
                        </tbody>
                    </table>
               
                <div class="card-header">
                    <table class="table">
                        <tr>
                            <td><h5>Grade Point Average (GPA) For This Semester : <b>3.76</b></h5></td>
                        </tr>
                        <tr>
                              <td><h5>Cumulative Grade Point Average (CGPA) : <b>3.76</b></h5></td>
                        </tr>
                    </table>
                </div>
            </div>
             </div>
        </div>
    </div>
</div>
@endsection