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
                    
                    <div class="alert alert-info">
                        <strong>You have {{$percentage}}% of atttendance in this course.</strong>
                    </div><br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Course Id</th>
                                <th>Date</th>
                                <th>Presence</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($att_details as $att_detail)
                            <tr>
                                <td>{{$att_detail->course_fk_att}}</td>
                                <td>{{$att_detail->att_date}}</td>
                                <td>{{$att_detail->att_presence}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection