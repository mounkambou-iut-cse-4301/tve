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
                            @foreach($data as $key => $dt)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{courseName($key)}}</td>
                                <td>{{coursecredit($key)}}</td>
                                <td>{{$dt}}</td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
               
                <div class="card-header">
                    <table class="table">
                        <tr>
                            <td><h5>Grade Point Average (GPA) For This Semester : <b>{{$student_gpa->gpa_result}}</b></h5></td>
                        </tr>
                        <tr>
                              <td><h5>Cumulative Grade Point Average (CGPA) : <b>{{$student_gpa->cgpa_result}}</b></h5></td>
                        </tr>
                    </table>
                </div>
            </div>
             </div>
        </div>
    </div>
</div>
@endsection