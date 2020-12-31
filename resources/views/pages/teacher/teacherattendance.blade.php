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
                    @if($status==1)
                    <div class="alert alert-info" style="text-align: center;">
                        <strong>Whoops, Sorry but you can not take attendances in this period .</strong>
                    </div>
                    @elseif($status==0)
                    <form action="/teacher_attendance" method="post" class="validated">
                        @csrf
                         <span class="badge badge-success" style="text-align: center ">{{ session('message') }}</span>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Student Id</th>
                                    <th>Presence</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stu as $st_id)
                                <tr>
                                    <div class="form-group">
                                        <td><input type="number" class="form-control" name="st_id[]" value="{{$st_id}}" readonly></td>
                                        <td><input type="number" min="0" max="1" class="form-control"  name="attendance[]"></td>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection