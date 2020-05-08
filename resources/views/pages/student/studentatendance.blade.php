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
                                    <th>Date</th>
                                    <th>Presence</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student_att as $st_att)
                                <tr>
                                    <td>{{$st_att->course_fk_att}}</td>
                                    <td>{{$st_att->att_date}}</td>
                                    <td>{{$st_att->att_presence}}</td>
                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>{{$student_att->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection