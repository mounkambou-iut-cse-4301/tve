@extends('layouts/master',['title'=>'cse 1 Details'])
@section('content')
<!--================first_year start =================-->
<div class="container mt-3"><br><br><br><br><br>
    <div class="card" style="background-color: #F8F8FF;">
        
        <div class="row">
            <div class="col-md-6">
                <br>
                <h2 style="text-align: center;">First Semester</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Course Id</th>
                            <th>Names</th>
                            <th>Credits</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($course_fi as $crse)              
                        <tr>
                            <td>{{$crse->course_id}}</td>
                            <td>{{$crse->course_name}}</td>
                            <td>{{$crse->course_credit}}</td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
                <div>{{$course_fi->links()}}</div>
            </div>
            <div class="col-md-6">
                <br>
                <h2 style="text-align: center;">Second Semester</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Course Id</th>
                            <th>Names</th>
                            <th>Credits</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($course_se as $crse)              
                        <tr>
                            <td>{{$crse->course_id}}</td>
                            <td>{{$crse->course_name}}</td>
                            <td>{{$crse->course_credit}}</td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
                 <div>{{$course_se->links()}}</div>
            </div>
        </div>
    </div>
</div>
<!--================first_year End =================-->
@endsection