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
                    <div class="alert alert-info">
                        <strong>This student has {{$percentage}}% of atttendance in your course.</strong>
                    </div>
                    <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Student Id</th>
                                <th>Date</th>
                                <th>Presence</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($att_details as $att_detail)
                            <tr>
                                <td>{{$att_detail->student_fk_att}}</td>
                                <td>{{$att_detail->att_date}}</td>
                                <td>
                                    @if($att_detail->att_presence==1)
                                    <i class="fas fa-check" style="color: green" ></i>
                                    @elseif($att_detail->att_presence==0)
                                    <i class="fas fa-times" style="color: red" ></i>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div>{{$att_details->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection