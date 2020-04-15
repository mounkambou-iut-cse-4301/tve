@extends('layouts/master',['title'=>'cse 3 Details'])


@section('content')


    <!--================third_year start =================-->

    <div class="container mt-3"><br><br><br><br><br>
        <div class="card" style="background-color: #F8F8FF;">
            <div class="row">


                <div class="col-md-6">
                    <br>
                    <h2 style="text-align: center;">Fifth Semester</h2>

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
                </div>
                <div class="col-md-6">
                    <br>
                    <h2 style="text-align: center;">Sixth Semester</h2>

                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Course Id</th>
                            <th>Names</th>
                            <th>Credits</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($course_si as $crse)              
                        <tr>
                            <td>{{$crse->course_id}}</td>
                            <td>{{$crse->course_name}}</td>
                            <td>{{$crse->course_credit}}</td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <!--================third_year End =================-->

    

@endsection